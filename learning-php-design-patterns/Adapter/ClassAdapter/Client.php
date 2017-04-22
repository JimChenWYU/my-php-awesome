<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/7
 * Time: 10:53
 */

namespace JimChen\Patterns\Adapter\ClassAdapter;


class Client
{
    private $requestNow;
    private $dollarRequest;

    /**
     * Client constructor.
     */
    public function __construct()
    {
        $this->requestNow = new EuroAdapter();
        $this->dollarRequest = new DollarCalc();
        $euro = "&#8364;";
        echo "Euros: {$euro}" . $this->makeAdapterRequest($this->requestNow) . '<br/>';
        echo "Dollars: $" . $this->makeDollarRequest($this->dollarRequest) . '<br/>';
    }

    public function makeAdapterRequest(ITarget $req)
    {
        return $req->requestCalc(40, 50);
    }

    public function makeDollarRequest(DollarCalc $req)
    {
        return $req->requestCalc(40, 50);
    }
}