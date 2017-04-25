<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/25/2017
 * Time: 3:30 PM
 */

namespace JimChen\Patterns\State;


interface IState
{
    public function turnOn();
    public function turnOff();
    public function turnBrighter();
    public function turnBrightest();
}