<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/27/2017
 * Time: 4:23 PM
 */
namespace JimChen\Patterns\Proxy;


class Client
{
    private $proxy;
    private $un;
    private $pw;
    private $table = "proxyLog";
    private $hookup;
    /**
     * Client constructor.
     */
    public function __construct()
    {
        $this->hookup = UniversalConnect::doConnect();
        $this->un = $this->hookup->real_escape_string(trim($_POST['uname']));
        $this->pw = $this->hookup->real_escape_string(trim($_POST['pw']));
        $this->getIface($this->proxy = new Proxy());
    }

    private function getIface(ISubject $proxy)
    {
        $proxy->login($this->un, $this->pw);
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
        $this->hookup->close();
    }
}