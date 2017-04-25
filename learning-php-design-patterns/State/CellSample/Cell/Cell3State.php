<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/25/2017
 * Time: 5:17 PM
 */

namespace JimChen\Patterns\State\CellSample\Cell;


use JimChen\Patterns\State\CellSample\Context;
use JimChen\Patterns\State\CellSample\IMatrix;

class Cell3State implements IMatrix
{
    private $context;

    /**
     * Cell1State constructor.
     * @param Context $context
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
        echo "Now you are in 6<br/>";
        $this->context->setState($this->context->getCell6());
    }

    public function goLeft()
    {
        // TODO: Implement goLeft() method.
        echo "Now you are in 2<br/>";
        $this->context->setState($this->context->getCell2());
    }

    public function goRight()
    {
        // TODO: Implement goRight() method.
        echo "You can't go right!<br/>";
    }
}