<?php

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/6
 * Time: 11:55
 */
namespace JimChen\Patterns\Prototype\AboutClone;

abstract class CloneMe
{
    protected $name;
    protected $age;
    abstract function __clone();
}