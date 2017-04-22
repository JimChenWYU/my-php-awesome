<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/7
 * Time: 11:31
 */

namespace JimChen\Patterns\Adapter\ObjectAdapter;


interface IFormat
{
    public function formatCSS();
    public function formatGraphics();
    public function horizontalLayout();
}