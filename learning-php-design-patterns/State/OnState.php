<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/25/2017
 * Time: 3:26 PM
 */

namespace JimChen\Patterns\State;


class OnState implements IState
{
    /**
     * @var Context
     */
    private $context;
    /**
     * @param Context $context
     * OnState constructor.
     */
    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    public function turnOn()
    {
        // TODO: Implement turnOnLight() method.
        echo "Light is already on -> take on action <br/>";
    }

    public function turnOff()
    {
        // TODO: Implement turnOffLight() method.
        echo "Light off! <br/>";
        $this->context->setState($this->context->getOffState());
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
        echo "Light is already on -> please turn brighter -> take no action <br/>";
    }

}