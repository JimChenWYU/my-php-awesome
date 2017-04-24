<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/24/2017
 * Time: 3:18 PM
 */

namespace JimChen\Patterns\Wrapper\Sample;


class Client
{
    private $hotDate;

    /**
     * Client constructor.
     */
    public function __construct()
    {
        $this->hotDate = new Female();
        $this->hotDate->setAge("Age Group 4");
        echo $this->hotDate->getAge();
        $this->hotDate = $this->wrapComponent($this->hotDate);
        echo $this->hotDate->getFeature();
    }

    private function wrapComponent(IComponent $component)
    {
        $component = new ProgramLang($component);
        $component->setFeature("php");
        $component = new Hardware($component);
        $component->setFeature("lin");
        $component = new Food($component);
        $component->setFeature("veg");
        return $component;
    }
}