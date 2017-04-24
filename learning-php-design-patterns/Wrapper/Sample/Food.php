<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/24/2017
 * Time: 3:11 PM
 */

namespace JimChen\Patterns\Wrapper\Sample;


class Food extends Decorator
{
    private $chowNow;

    private $snacks = [
        'piz' => 'Pizza',
        'burg' => 'Burgers',
        'nach' => 'Nachos',
        'veg' => 'Veggies'
    ];

    /**
     * Food constructor.
     */
    public function __construct(IComponent $dataNow)
    {
        $this->data = $dataNow;
    }

    public function getFeature()
    {
        // TODO: Implement getFeature() method.
        $output = $this->data->getFeature();
        $fmat = '<br/>&nbsp;&nbsp;';
        $output .= "$fmat Preferred programming language: ";
        $output .= $this->chowNow;
        return $output;
    }

    public function setFeature($fea)
    {
        // TODO: Implement setFeature() method.
        $this->chowNow = $this->snacks[$fea];
    }
}