<?php
namespace JimChen\Patterns\Factory\Entity;

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/3/26
 * Time: 14:13
 */
class Dog extends Pet
{
    public function say()
    {
        return '汪汪叫~<br />';
    }

    /**
     * Dog constructor.
     */
    public function __construct($name)
    {
        $this->_name = $name;
    }

    /**
     *
     *
     * @return mixed
     */
    public function getName()
    {
        // TODO: Implement getName() method.
        return $this->_name;
    }
}