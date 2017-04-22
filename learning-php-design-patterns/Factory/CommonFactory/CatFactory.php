<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/3/26
 * Time: 19:40
 */

namespace JimChen\Patterns\Factory\CommonFactory;


use JimChen\Patterns\Factory\Entity\Cat;

class CatFactory extends Factory
{
    public function create($name)
    {
        return new Cat($name);
    }
}