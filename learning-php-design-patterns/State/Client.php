<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/25/2017
 * Time: 3:52 PM
 */

namespace JimChen\Patterns\State;


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
        $this->context->turnOnLight();
        $this->context->turnOnLight();
        $this->context->turnOffLight();
        $this->context->turnOnLight();
        $this->context->turnBrighterLight();
        $this->context->turnBrightestLight();
        $this->context->turnOffLight();

    }
}