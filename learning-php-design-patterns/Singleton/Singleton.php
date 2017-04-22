<?php
namespace JimChen\Patterns\Singleton;
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/3/25
 * Time: 23:57
 */
class Singleton
{

    /**
     * @var null
     */
    private static $_instance = null;

    /**
     * Singleton constructor.
     */
    private function __construct()
    {
    }

    /**
     *  禁止克隆
     */
    private function __clone()
    {
        // TODO: Implement __clone() method.
        // Forbidden
    }

    /**
     * 实例化
     *
     * @static
     * @return null|Singleton
     */
    public static function getInstance()
    {
        if (! self::$_instance instanceof self) {
            self::$_instance = new Singleton();
        }
        return self::$_instance;
    }
}