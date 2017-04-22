<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/7
 * Time: 10:33
 */

namespace JimChen\Patterns\Adapter\ClassAdapter;


class DollarCalc
{
    private $dollar;
    private $product;
    private $service;
    protected $rate = 1;   // 一次交易

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
        $this->dollar = $this->product + $this->service;
        return $this->requestTotal();
    }

    /**
     *
     *
     * @return int
     */
    public function requestTotal()
    {
        $this->dollar *= $this->rate;
        return $this->dollar;
    }

    /**
     * @param int $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }
}