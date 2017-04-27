<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/26/2017
 * Time: 12:55 PM
 */

namespace JimChen\Patterns\Proxy;


class UniversalConnect implements IConnectInfo
{
    private static $config;

    private static $hookup;

    public static function doConnect()
    {
        // TODO: Implement doConnect() method.
        self::$config = require 'config.php';
        self::$hookup = mysqli_connect(self::$config['host'], self::$config['username'], self::$config['password'], self::$config['database'], self::$config['port']);

        if (self::$hookup) {
            echo "Successful Connect to MySQL: ";
        } elseif (mysqli_connect_error(self::$hookup)) {
            echo 'Here is why it failed: ' . mysqli_connect_error();
        }
        return self::$hookup;
    }
}