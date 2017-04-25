<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/24/2017
 * Time: 4:58 PM
 */

namespace JimChen\Patterns\TemplateMethod;


class ConcreateClass extends AbstractClass
{
    protected function addPix($pix)
    {
        // TODO: Implement addPix() method.
        $this->pix = $pix;
        $this->pix = "pix/" . $this->pix;
        $formatter = "<img src={$this->pix} /><br/>";
        echo $formatter;
    }

    protected function addCap($cap)
    {
        // TODO: Implement addCap() method.
        $this->cap = $cap;
        echo "<em>Caption: </em>" . $this->cap . "<br/>";
    }
}