<?php

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/26/2017
 * Time: 12:10 PM
 */
class Dotenv
{
    public static function load($path, $file = '.env')
    {
        if (! is_string($file)) {
            $file = '.env';
        }

        $filePath = rtrim($path, '/') . '/' . $file;
        if (!is_readable($filePath) || !is_file($filePath)) {
            throw new Exception(
                sprintf(
                    'Dotenv: Environment file %s not found or not readable. '.
                    'Create file with your environment settings at %s',
                    $file,
                    $filePath
                )
            );
        }

        $autodetect = ini_get('auto_detect_line_endings');
        ini_set('auto_detect_line_endings', '1');
        $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        ini_set('auto_detect_line_endings', $autodetect);

        foreach ($lines as $line) {
            if (strpos(trim($line), '#') === 0) {
                continue;
            }

            if (strpos($line, '=') !== false) {
                static::setEnvironmentVariable($line);
            }
        }
    }

    private static function setEnvironmentVariable($name, $value = null)
    {
        list($name, $value) = static::splitCompoundStringIntoParts($name, $value);
        if (!is_null(static::findEnvironmentVariable($name))) {
            return;
        }

        putenv("$name=$value");
        $_ENV[$name] = $value;
        $_SERVER[$name] = $value;
    }

    private static function findEnvironmentVariable($name)
    {
        switch (true) {
            case array_key_exists($name, $_ENV):
                return $_ENV[$name];
            case array_key_exists($name, $_SERVER):
                return $_SERVER[$name];
            default:
                $value = getenv($name);
                return $value === false ? null : $value;
        }
    }

    private static function splitCompoundStringIntoParts($name, $value)
    {
        if (strpos($name, '=') !== false) {
            list($name, $value) = array_map('trim', explode('=', $name, 2));
        }

        return array($name, $value);
    }
}