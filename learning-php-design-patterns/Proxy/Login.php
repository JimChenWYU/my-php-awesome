<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/27/2017
 * Time: 4:23 PM
 */
require __DIR__ . '/../vendor/autoload.php';
Dotenv::load(__DIR__ . '/../');

new \JimChen\Patterns\Proxy\Client();