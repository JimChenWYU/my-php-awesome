<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/25/2017
 * Time: 5:35 PM
 */

namespace JimChen\Patterns\State\CellSample;


class Client
{
    /**
     * @var Context
     */
    private $context;
    /**
     * Client constructor.
     */
    public function __construct()
    {
        $this->context = new Context();
        $this->context->doUp();
        $this->context->doDown();
        $this->context->doRight();
        $this->context->doDown();
        $this->context->doRight();
        $this->context->doDown();
        $this->context->doRight();
        $this->context->doLeft();
    }
}