<?php
require '../vendor/autoload.php';
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/6
 * Time: 15:10
 */
echo '<h2>Fly</h2>';
$worker = new \JimChen\Patterns\Prototype\Fly\Client();

echo '<br/>';
echo '<h2>Company</h2>';

$worker = new \JimChen\Patterns\Prototype\Company\Client();