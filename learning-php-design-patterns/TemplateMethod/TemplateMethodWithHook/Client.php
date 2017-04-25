<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/25/2017
 * Time: 11:32 AM
 */
namespace JimChen\Patterns\TemplateMethod\TemplateMethodWithHook;

use JimChen\Patterns\TemplateMethod\TemplateMethodWithHook\Hook\ZambeziCalc;

class Client
{
    private $buyTotal;
    private $gpsNow;
    private $mapNow;
    private $boatNow;
    private $special;
    private $zamCalc;

    /**
     * Client constructor.
     */
    public function __construct()
    {
        $this->setHTML();
        $this->setCost();
        $this->zamCalc = new ZambeziCalc();
        $this->zamCalc->templateMethod($this->buyTotal, $this->special);
    }

    private function setHTML()
    {
        $this->gpsNow = $_POST['gps'];
        $this->mapNow = $_POST['map'];
        $this->boatNow = $_POST['boat'];
    }

    private function setCost()
    {
        $this->buyTotal = $this->gpsNow;
        var_dump($_POST);
        foreach ($this->mapNow as $value) {
            $this->buyTotal += $value;
        }

        $this->special = ($this->buyTotal >= 200);
        $this->buyTotal += $this->boatNow;
    }
}

new Client();