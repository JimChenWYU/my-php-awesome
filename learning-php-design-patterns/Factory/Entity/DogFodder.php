<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/3/26
 * Time: 19:50
 */

namespace JimChen\Patterns\Factory\Entity;


class DogFodder extends Fodder
{

    /**
     * DogFodder constructor.
     */
    public function __construct()
    {
        parent::__construct('dog');
    }
}