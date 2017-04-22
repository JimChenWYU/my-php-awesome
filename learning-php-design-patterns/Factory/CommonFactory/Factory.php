<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/3/26
 * Time: 19:38
 */

namespace JimChen\Patterns\Factory\CommonFactory;


abstract class Factory
{
    public abstract function create($name);
}