<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/7
 * Time: 16:37
 */

namespace JimChen\Patterns\Decorator;


class Database extends Decorator
{
    /**
     * Database constructor.
     * @param $siteNow IComponent
     */
    public function __construct(IComponent $siteNow)
    {
        $this->site = $siteNow;
    }

    public function getSite()
    {
        $fmat = "<br/>&nbsp;&nbsp; MySQL Database ";
        return $this->site->getSite() . $fmat;
    }

    public function getPrice()
    {
        return 800 + $this->site->getPrice();
    }
}