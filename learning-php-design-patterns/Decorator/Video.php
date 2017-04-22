<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/7
 * Time: 16:35
 */

namespace JimChen\Patterns\Decorator;


class Video extends Decorator
{
    /**
     * Video constructor.
     * @param $siteNow IComponent
     */
    public function __construct(IComponent $siteNow)
    {
        $this->site = $siteNow;
    }

    public function getSite()
    {
        $fmat = "<br/>&nbsp;&nbsp; Video ";
        return $this->site->getSite() . $fmat;
    }

    public function getPrice()
    {
        return 350 + $this->site->getPrice();
    }
}