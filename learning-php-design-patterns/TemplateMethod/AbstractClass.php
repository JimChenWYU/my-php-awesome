<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/24/2017
 * Time: 4:56 PM
 */

namespace JimChen\Patterns\TemplateMethod;

/**
 * 抽象类
 * Class AbstractClass
 * @package JimChen\Patterns\TemplateMethod
 */
abstract class AbstractClass
{
    protected $pix;
    protected $cap;

    public function templateMethod($pix, $cap)
    {
        $this->pix = $pix;
        $this->cap = $cap;
        $this->addPix($this->pix);
        $this->addCap($this->cap);
    }

    abstract protected function addPix($pix);
    abstract protected function addCap($cap);
}