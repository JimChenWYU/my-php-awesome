<?php
require '../vendor/autoload.php';

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/3/26
 * Time: 0:01
 */
use JimChen\Patterns\Singleton\Singleton;


$SINGLETON = Singleton::getInstance();

// Success
var_dump($SINGLETON);

// Error
var_dump(new Singleton());

// Error
var_dump(clone $SINGLETON);