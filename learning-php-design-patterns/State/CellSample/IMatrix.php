<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/25/2017
 * Time: 5:11 PM
 */

namespace JimChen\Patterns\State\CellSample;


interface IMatrix
{
    public function goUp();
    public function goDown();
    public function goLeft();
    public function goRight();
}