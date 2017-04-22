<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/7
 * Time: 12:15
 */

namespace JimChen\Patterns\Adapter\ObjectAdapter;


interface IMobileFormat
{
    public function formatCSS();
    public function formatGraphics();
    public function verticalLayout();
}