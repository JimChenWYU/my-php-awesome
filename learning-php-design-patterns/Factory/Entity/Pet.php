<?php
namespace JimChen\Patterns\Factory\Entity;
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/3/26
 * Time: 13:57
 */
abstract class Pet
{
    protected $_name;

    abstract public function getName();

    abstract public function say();
}