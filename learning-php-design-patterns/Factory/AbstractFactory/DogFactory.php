<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/6
 * Time: 10:45
 */

namespace JimChen\Patterns\Factory\AbstractFactory;


use JimChen\Patterns\Factory\Entity\Dog;
use JimChen\Patterns\Factory\Entity\DogFodder;

class DogFactory extends AbstractFactory
{
    public function createPet($name)
    {
        // TODO: Implement createPet() method.
        return new Dog($name);
    }

    public function createFodder()
    {
        // TODO: Implement createFodder() method.
        return new DogFodder();
    }

}