<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/25/2017
 * Time: 4:04 PM
 */

namespace JimChen\Patterns\State;


class BrighterState implements IState
{
    /**
     * @var Context
     */
    private $context;

    /**
     * BrighterState constructor.
     * @param Context $context
     */
    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    public function turnOn()
    {
        // TODO: Implement turnOnLight() method.
        echo "Light is already on -> Now you can turn off<br/>";
        $this->context->setState($this->context->getOnState());
    }

    public function turnOff()
    {
        // TODO: Implement turnOffLight() method.
        echo "Now you can't turn off soon<br/>";
    }

    public function turnBrighter()
    {
        // TODO: Implement turnBrighter() method.
        echo "Light is already brighter -> take no action<br/>";
    }

    public function turnBrightest()
    {
        // TODO: Implement turnBrightest() method.
        echo "Lights Brightest! <br/>";
        $this->context->setState($this->context->getBrightestState());
    }
}