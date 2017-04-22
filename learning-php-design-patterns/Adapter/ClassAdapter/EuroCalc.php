<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/7
 * Time: 10:42
 */

namespace JimChen\Patterns\Adapter\ClassAdapter;


class EuroCalc
{
    private $euro;
    private $product;
    private $service;
    protected $rate = 1;

    /**
     *
     *
     * @param $productNow
     * @param $serviceNow
     * @return int
     */
    public function requestCalc($productNow, $serviceNow)
    {
        $this->product = $productNow;
        $this->service = $serviceNow;
        $this->euro = $this->product + $this->service;
        return $this->requestTotal();
    }

    /**
     *
     *
     * @return int
     */
    public function requestTotal()
    {
        $this->euro *= $this->rate;
        return $this->euro;
    }

    /**
     * @param int $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }
}