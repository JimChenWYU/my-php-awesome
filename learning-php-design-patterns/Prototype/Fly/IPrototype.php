<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/6
 * Time: 14:52
 */

namespace JimChen\Patterns\Prototype\Fly;


abstract class IPrototype
{
    public $eyeColor;
    public $wingBest;
    public $unitEyes;

    abstract function __clone();
}