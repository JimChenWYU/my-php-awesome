<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/29/2017
 * Time: 5:42 PM
 */

namespace JimChen\Patterns\Strategy\Sample;


use JimChen\Patterns\Strategy\Sample\Algorithm\DataEntry;
use JimChen\Patterns\Strategy\Sample\Algorithm\DisplayData;
use JimChen\Patterns\Strategy\Sample\Algorithm\SearchData;

class Client
{
    public function insertData()
    {
        $context = new Context(new DataEntry());
        $context->algorithm();
    }

    public function findData()
    {
        $context = new Context(new SearchData());
        $context->algorithm();
    }

    public function showAll()
    {
        $context = new Context(new DisplayData());
        $context->algorithm();
    }
}