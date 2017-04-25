<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/25/2017
 * Time: 4:10 PM
 */

namespace JimChen\Patterns\State;


class BrightestState implements IState
{
    /**
     * @var Context
     */
    private $context;

    /**
     * BrightestState constructor.
     * @param Context $context
     */
    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    public function turnOn()
    {
        // TODO: Implement turnOnLight() method.
        echo "Light is already on -> take no action<br/>";
    }

    public function turnOff()
    {
        // TODO: Implement turnOffLight() method.
        echo "Now you can't turn off -> take no action<br/>";
    }

    public function turnBrighter()
    {
        // TODO: Implement turnBrighter() method.
        echo "Lights Brighter! <br/>";
        $this->context->setState($this->context->getBrighterState());
    }

    public function turnBrightest()
    {
        // TODO: Implement turnBrightest() method.
        echo "Light is already brightest -> take no action <br/>";
    }
}