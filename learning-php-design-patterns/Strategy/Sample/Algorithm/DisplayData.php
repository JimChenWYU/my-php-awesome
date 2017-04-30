<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/29/2017
 * Time: 5:39 PM
 */

namespace JimChen\Patterns\Strategy\Sample\Algorithm;


use JimChen\Patterns\Strategy\Tool\UniversalConnect;

class DisplayData implements IStrategy
{
    public function algorithm()
    {
        // TODO: Implement algorithm() method.
        $hookup = UniversalConnect::doConnect();
        $test = "Here's all the data !!";
        echo $test . "<br/>";
    }
}