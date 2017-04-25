<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/25/2017
 * Time: 5:11 PM
 */

namespace JimChen\Patterns\State\CellSample;


use JimChen\Patterns\State\CellSample\Cell\Cell1State;
use JimChen\Patterns\State\CellSample\Cell\Cell2State;
use JimChen\Patterns\State\CellSample\Cell\Cell3State;
use JimChen\Patterns\State\CellSample\Cell\Cell4State;
use JimChen\Patterns\State\CellSample\Cell\Cell5State;
use JimChen\Patterns\State\CellSample\Cell\Cell6State;
use JimChen\Patterns\State\CellSample\Cell\Cell7State;
use JimChen\Patterns\State\CellSample\Cell\Cell8State;
use JimChen\Patterns\State\CellSample\Cell\Cell9State;

class Context
{
    private $cell1;
    private $cell2;
    private $cell3;
    private $cell4;
    private $cell5;
    private $cell6;
    private $cell7;
    private $cell8;
    private $cell9;

    /**
     * @var IMatrix
     */
    private $currentState;

    /**
     * Context constructor.
     */
    public function __construct()
    {
        $this->cell1 = new Cell1State($this);
        $this->cell2 = new Cell2State($this);
        $this->cell3 = new Cell3State($this);
        $this->cell4 = new Cell4State($this);
        $this->cell5 = new Cell5State($this);
        $this->cell6 = new Cell6State($this);
        $this->cell7 = new Cell7State($this);
        $this->cell8 = new Cell8State($this);
        $this->cell9 = new Cell9State($this);

        $this->currentState = $this->cell1;
    }

    public function doUp()
    {
        $this->currentState->goUp();
    }

    public function doDown()
    {
        $this->currentState->goDown();
    }

    public function doLeft()
    {
        $this->currentState->goLeft();
    }

    public function doRight()
    {
        $this->currentState->goRight();
    }

    /**
     * @param IMatrix $currentState
     */
    public function setState(IMatrix $currentState)
    {
        $this->currentState = $currentState;
    }

    /**
     * @return mixed
     */
    public function getCell1()
    {
        return $this->cell1;
    }

    /**
     * @return mixed
     */
    public function getCell2()
    {
        return $this->cell2;
    }

    /**
     * @return mixed
     */
    public function getCell3()
    {
        return $this->cell3;
    }

    /**
     * @return mixed
     */
    public function getCell4()
    {
        return $this->cell4;
    }

    /**
     * @return mixed
     */
    public function getCell5()
    {
        return $this->cell5;
    }

    /**
     * @return mixed
     */
    public function getCell6()
    {
        return $this->cell6;
    }

    /**
     * @return mixed
     */
    public function getCell7()
    {
        return $this->cell7;
    }

    /**
     * @return mixed
     */
    public function getCell8()
    {
        return $this->cell8;
    }

    /**
     * @return mixed
     */
    public function getCell9()
    {
        return $this->cell9;
    }
}