<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/29/2017
 * Time: 5:57 PM
 */

require __DIR__ . '/../../vendor/autoload.php';
Dotenv::load(__DIR__ . '/../../');

$trigger = new \JimChen\Patterns\Strategy\Sample\Client();
$trigger->insertData();
$trigger->showAll();
$trigger->findData();