<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/26/2017
 * Time: 3:07 PM
 */

namespace JimChen\Patterns\Proxy;


class ConnectClient
{
    private $hookup;

    /**
     * ConnectClient constructor.
     */
    public function __construct()
    {
        $this->hookup = UniversalConnect::doConnect();
    }
}