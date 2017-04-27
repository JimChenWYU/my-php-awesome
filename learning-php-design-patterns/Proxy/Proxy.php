<?php

/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/27/2017
 * Time: 4:32 PM
 */
namespace JimChen\Patterns\Proxy;

class Proxy implements ISubject
{
    private $table;
    private $hookup;
    private $logGood;
    private $realSubject;

    public function login($uNow, $pNow)
    {
        $uname = $uNow;
        $pw = md5($pNow);
        $this->logGood = false;
        $this->table = "proxyLog";
        $this->hookup = UniversalConnect::doConnect();
        $sql = sprintf("SELECT pw FROM %s WHERE uname='%s'", $this->table, $uname);

        if ($result = $this->hookup->query($sql)) {
            $row = $result->fetch_array(MYSQLI_ASSOC);
            if ($row['pw'] == $pw) {
                $this->logGood = true;
            }
            $result->close();
        } elseif (($result = $this->hookup->query($sql)) === false) {
            printf("Failed： %s <br/>", $this->hookup->error);
            exit();
        }
        $this->hookup->close();
        if ($this->logGood) {
            $this->request();
        } else {
            echo "Username and/or Password not on record.";
        }
    }

    public function request()
    {
        // TODO: Implement request() method.
        $this->realSubject = new RealSubject();
        $this->realSubject->request();
    }
}