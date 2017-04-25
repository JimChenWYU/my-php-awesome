<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/25/2017
 * Time: 3:26 PM
 */

namespace JimChen\Patterns\State;


class OffState implements IState
{
    /**
     * @var Context
     */
    private $context;
    /**
     * OffState constructor.
     * @param Context $context
     */
    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    public function turnOn()
    {
        // TODO: Implement turnOnLight() method.
        echo "Lights on! Now I can see! <br/>";
        $this->context->setState($this->context->getOnState());
    }

    public function turnOff()
    {
        // TODO: Implement turnOffLight() method.
        echo "Light is already off -> take on action <br/>";
    }

    public function turnBrighter()
    {
        // TODO: Implement turnBrighter() method.
        echo "Light is already off -> take on action <br/>";
    }

    public function turnBrightest()
    {
        // TODO: Implement turnBrightest() method.
        echo "Light is already off -> take on action <br/>";
    }
}