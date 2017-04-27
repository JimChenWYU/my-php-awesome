<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/26/2017
 * Time: 12:42 PM
 */
require __DIR__ . '/../vendor/autoload.php';
Dotenv::load(__DIR__ . '/../');

var_dump($_POST);
new \JimChen\Patterns\MySQLAndPHP\ConnectClient();
//new \JimChen\Patterns\MySQLAndPHP\CreteTable();
