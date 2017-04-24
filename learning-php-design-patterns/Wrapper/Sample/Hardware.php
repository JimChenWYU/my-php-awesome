<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/24/2017
 * Time: 3:07 PM
 */

namespace JimChen\Patterns\Wrapper\Sample;


class Hardware extends Decorator
{
    private $hardwareNow;

    protected $box = [
        "mac" => "Macintosh",
        "dell" => "Dell",
        "hp" => "Hewlett-Packard",
        "lin" => "Linux"
    ];

    /**
     * Hardware constructor.
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
        $output .= "$fmat Current Hardware: ";
        $output .= $this->hardwareNow;
        return $output;
    }

    public function setFeature($fea)
    {
        // TODO: Implement setFeature() method.
        $this->hardwareNow = $this->box[$fea];
    }
}