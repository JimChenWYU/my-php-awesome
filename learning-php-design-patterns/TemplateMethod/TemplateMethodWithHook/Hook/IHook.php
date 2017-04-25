<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/25/2017
 * Time: 11:51 AM
 */

namespace JimChen\Patterns\TemplateMethod\TemplateMethodWithHook\Hook;


abstract class IHook
{
    protected $purchased;
    /**
     * 这是钩子
     * @var bool
     */
    protected $hookSpecial;
    protected $shippingHook;
    protected $fullCost;

    public function templateMethod($total, $special)
    {
        $this->purchased = $total;
        $this->hookSpecial = $special;
        $this->addTax();
        $this->addShippingHook();
        $this->displayCost();
    }

    protected abstract function addTax();
    protected abstract function addShippingHook();
    protected abstract function displayCost();
}