<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/7
 * Time: 16:16
 */

namespace JimChen\Patterns\Decorator;


abstract class IComponent
{
    protected $site;
    abstract public function getSite();
    abstract public function getPrice();
}