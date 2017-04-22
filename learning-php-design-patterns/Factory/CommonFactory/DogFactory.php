<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/3/26
 * Time: 19:39
 */

namespace JimChen\Patterns\Factory\CommonFactory;


use JimChen\Patterns\Factory\Entity\Dog;

class DogFactory extends Factory
{
    public function create($name)
    {
        return new Dog($name);
    }
}