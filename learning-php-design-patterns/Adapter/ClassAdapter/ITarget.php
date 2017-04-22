<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/7
 * Time: 10:46
 */

namespace JimChen\Patterns\Adapter\ClassAdapter;


interface ITarget
{
    /**
     *
     *
     * @return int|float
     */
    public function requester();
}