<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/3/26
 * Time: 19:46
 */

namespace JimChen\Patterns\Factory\AbstractFactory;


abstract class AbstractFactory
{
    public abstract function createPet($name);

    public abstract function createFodder();
}