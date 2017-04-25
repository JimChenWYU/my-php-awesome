<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/25/2017
 * Time: 11:55 AM
 */

namespace JimChen\Patterns\TemplateMethod\TemplateMethodWithHook\Hook;

/**
 * 实现钩子
 * Class ZambeziCalc
 * @package JimChen\Patterns\TemplateMethod\TemplateMethodWithHook\Hook
 */
class ZambeziCalc extends IHook
{
    protected function addTax()
    {
        // TODO: Implement addTax() method.
        $this->fullCost = $this->purchased + ($this->purchased * .07);
    }

    protected function addShippingHook()
    {
        // TODO: Implement addShippingHook() method.
        if (! $this->hookSpecial) {
            $this->fullCost += 12.95;
        }
    }

    protected function displayCost()
    {
        // TODO: Implement displayCost() method.
        echo "Your full cost is {$this->fullCost}";
    }
}