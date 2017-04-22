<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/7
 * Time: 16:28
 */

namespace JimChen\Patterns\Decorator;


class BasicSite extends IComponent
{

    /**
     * BasicSite constructor.
     */
    public function __construct()
    {
        $this->site = 'Basic Site';
    }

    public function getSite()
    {
        // TODO: Implement getSite() method.
        return $this->site;
    }

    public function getPrice()
    {
        // TODO: Implement getPrice() method.
        return 1200;
    }
}