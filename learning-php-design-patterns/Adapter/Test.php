<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/7
 * Time: 10:58
 */
require '../vendor/autoload.php';

/**
 * 费用均用美元来结算，为了可以用欧元来显示结算结果，通过欧元的适配器改变兑换率从而实现。
 */
$worker = new \JimChen\Patterns\Adapter\ClassAdapter\Client();

/**
 * 适配移动端和桌面端，通过适配器使用相同的接口
 */
$worker2 = new \JimChen\Patterns\Adapter\ObjectAdapter\Client();