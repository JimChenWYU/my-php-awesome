<?php

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/6
 * Time: 11:56
 */

namespace JimChen\Patterns\Prototype\AboutClone;

class Person extends CloneMe
{
    public function __construct()
    {
        $this->_init();
        echo 'The first person.';
        $this->name = 'Jim';
        $this->age = 23;
    }

    function __clone()
    {
        // TODO: Implement __clone() method.
        echo 'The clone person.';
    }

    public function display()
    {
        echo "<p>{$this->name}</p>";
        echo "<p>{$this->age}</p>";
    }

    private function _init()
    {
        echo '<p>initialize.</p>';
    }
}