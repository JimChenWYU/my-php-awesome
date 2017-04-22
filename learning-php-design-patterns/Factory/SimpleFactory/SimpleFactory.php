<?php
namespace JimChen\Patterns\Factory\SimpleFactory;

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/3/26
 * Time: 13:53
 */
use JimChen\Patterns\Factory\Entity\Cat;
use JimChen\Patterns\Factory\Entity\Dog;

/**
 * Class SimpleFactory
 * 简单工厂
 * @author Jim Chen <18219111672@163.com>
 * @copyright 2017
 */
abstract class SimpleFactory
{
    public static function create($type = '', $name)
    {
        switch ($type) {
            case 'cat':
                return new Cat($name);
            case 'dog':
                return new Dog($name);
            default:
                throw new \Exception('动物类型不存在！');
                break;
        }
    }
}