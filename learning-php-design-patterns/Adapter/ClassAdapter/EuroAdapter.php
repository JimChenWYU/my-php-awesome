<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/7
 * Time: 10:47
 */

namespace JimChen\Patterns\Adapter\ClassAdapter;


class EuroAdapter extends EuroCalc implements ITarget
{
    /**
     * EuroAdapter constructor.
     */
    public function __construct()
    {
        $this->requester();
    }


    /**
     *
     *
     * @return float|int
     */
    public function requester()
    {
        // TODO: Implement requester() method.
        $this->rate = 0.8111;
        return $this->rate;
    }
}