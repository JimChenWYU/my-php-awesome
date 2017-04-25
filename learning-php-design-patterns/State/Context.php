<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/25/2017
 * Time: 3:23 PM
 */

namespace JimChen\Patterns\State;


class Context
{
    private $offState;
    private $onState;
    private $currentState;
    private $brighterState;
    private $brightestState;

    /**
     * Context constructor.
     */
    public function __construct()
    {
        $this->offState = new OffState($this);
        $this->onState = new OnState($this);
        $this->brighterState = new BrighterState($this);
        $this->brightestState = new BrightestState($this);
        // 初始状态
        $this->currentState = $this->offState;
    }

    public function turnOnLight()
    {
        $this->currentState->turnOn();
    }

    public function turnOffLight()
    {
        $this->currentState->turnOff();
    }

    public function turnBrighterLight()
    {
        $this->currentState->turnBrighter();
    }

    public function turnBrightestLight()
    {
        $this->currentState->turnBrightest();
    }

    /**
     * @param IState $state
     */
    public function setState(IState $state)
    {
        $this->currentState = $state;
    }

    /**
     * @return OnState
     */
    public function getOnState()
    {
        return $this->onState;
    }

    /**
     * @return OffState
     */
    public function getOffState()
    {
        return $this->offState;
    }

    /**
     * @return mixed
     */
    public function getBrighterState()
    {
        return $this->brighterState;
    }

    /**
     * @return mixed
     */
    public function getBrightestState()
    {
        return $this->brightestState;
    }
}