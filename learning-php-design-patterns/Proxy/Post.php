<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/27/2017
 * Time: 4:09 PM
 */
require __DIR__ . '/../vendor/autoload.php';
Dotenv::load(__DIR__ . '/../');

new \JimChen\Patterns\Proxy\HashRegister();

header("Location: login.html");