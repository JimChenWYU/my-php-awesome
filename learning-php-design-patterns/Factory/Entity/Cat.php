<?php
namespace JimChen\Patterns\Factory\Entity;
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/3/26
 * Time: 14:12
 */
class Cat extends Pet
{
    public function say()
    {
        return '喵喵叫~<br />';
    }


    /**
     * Cat constructor.
     */
    public function __construct($name)
    {
        $this->_name = $name;
    }

    public function getName()
    {
        // TODO: Implement getName() method.
        return $this->_name;
    }
}