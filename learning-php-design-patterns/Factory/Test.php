<?php
require '../vendor/autoload.php';

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/3/26
 * Time: 14:32
 */


// 简单工厂
$cat = JimChen\Patterns\Factory\SimpleFactory\SimpleFactory::create('cat', 'Jane');
$dog = JimChen\Patterns\Factory\SimpleFactory\SimpleFactory::create('dog', 'Tom');

echo "{$cat->getName()} say: " . $cat->say(). '<br />';
echo "{$dog->getName()} say: " . $dog->say() . '<br />';

// 工厂模式
$catFactory = new \JimChen\Patterns\Factory\CommonFactory\CatFactory();
$cat = $catFactory->create('Abby');

$dogFactory = new \JimChen\Patterns\Factory\CommonFactory\DogFactory();
$dog = $dogFactory->create('Tim');

echo "{$cat->getName()} say: " . $cat->say(). '<br />';
echo "{$dog->getName()} say: " . $dog->say() . '<br />';

// 抽象工厂
$catFactory = new \JimChen\Patterns\Factory\AbstractFactory\CatFactory();
$cat = $catFactory->createPet('Jimmi');
$catFodder = $catFactory->createFodder();

$dogFactory = new \JimChen\Patterns\Factory\AbstractFactory\DogFactory();
$dog = $dogFactory->createPet('Mike');
$DogFodder = $dogFactory->createFodder();

echo "{$cat->getName()} say: " . $cat->say();
echo "{$cat->getName()}'s Fodder is " . $catFodder->getType() . '<br/>';

echo '<br/>';

echo "{$dog->getName()} say: " . $dog->say();
echo "{$dog->getName()}'s Fodder is " . $DogFodder->getType() . '<br/>';