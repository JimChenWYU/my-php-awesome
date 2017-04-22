<?php

require '../../vendor/autoload.php';
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/6
 * Time: 11:59
 */

$person = new \JimChen\Patterns\Prototype\AboutClone\Person();
$person->display();

$clone = clone $person;
$clone->display();