<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/25/2017
 * Time: 5:21 PM
 */

namespace JimChen\Patterns\State\CellSample\Cell;


use JimChen\Patterns\State\CellSample\Context;
use JimChen\Patterns\State\CellSample\IMatrix;

class Cell2State implements IMatrix
{
    private $context;

    /**
     * Cell2State constructor.
     * @param $context
     */
    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    public function goUp()
    {
        // TODO: Implement goUp() method.
        echo "You can't go up!<br/>";
    }

    public function goDown()
    {
        // TODO: Implement goDown() method.
        echo "Now you are in 5<br/>";
        $this->context->setState($this->context->getCell5());
    }

    public function goLeft()
    {
        // TODO: Implement goLeft() method.
        echo "Now you are in 1<br/>";
        $this->context->setState($this->context->getCell1());
    }

    public function goRight()
    {
        // TODO: Implement goRight() method.
        echo "Now you are in 3<br/>";
        $this->context->setState($this->context->getCell3());
    }
}