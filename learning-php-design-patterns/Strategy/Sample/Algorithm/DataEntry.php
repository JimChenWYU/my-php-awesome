<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/29/2017
 * Time: 5:34 PM
 */

namespace JimChen\Patterns\Strategy\Sample\Algorithm;


use JimChen\Patterns\Strategy\Tool\UniversalConnect;

class DataEntry implements IStrategy
{
    public function algorithm()
    {
        // TODO: Implement algorithm() method.
        $hookup = UniversalConnect::doConnect();
        $test = $hookup->real_escape_string($_POST['data']);
        echo "This data has been entered: " . $test . "<br/>";
    }
}