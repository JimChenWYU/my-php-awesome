<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/7
 * Time: 12:33
 */

namespace JimChen\Patterns\Adapter\ObjectAdapter;


class Client
{
    /**
     * @var Mobile
     */
    private $mobile;

    /**
     * @var MobileAdapter
     */
    private $mobileAdapter;

    /**
     * Client constructor.
     */
    public function __construct()
    {
        $this->mobile = new Mobile();
        $this->mobileAdapter = new MobileAdapter($this->mobile);
        $this->mobileAdapter->formatCSS();
        $this->mobileAdapter->formatGraphics();
        $this->mobileAdapter->horizontalLayout();
        $this->mobile->closeHTML();
    }


}