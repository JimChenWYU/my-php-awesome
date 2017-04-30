<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/29/2017
 * Time: 5:27 PM
 */

namespace JimChen\Patterns\Strategy\Sample;


use JimChen\Patterns\Strategy\Sample\Algorithm\IStrategy;

class Context
{
    /**
     * @var IStrategy
     */
    private $strategy;

    /**
     * Context constructor.
     * @param IStrategy $strategy
     */
    public function __construct(IStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function algorithm()
    {
        // TODO: Implement algorithm() method.
        $this->strategy->algorithm();
    }
}