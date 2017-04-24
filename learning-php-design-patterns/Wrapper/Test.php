<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/24/2017
 * Time: 2:36 PM
 */

require '../vendor/autoload.php';

$arrayList = new \JimChen\Patterns\Wrapper\ArrayList();

$arrayList->add(1);
$arrayList->add(2);
$arrayList->add(3);
$arrayList->add(4);

echo $arrayList->size();

var_dump($arrayList->toArray());

$worker = new \JimChen\Patterns\Wrapper\Sample\Client();