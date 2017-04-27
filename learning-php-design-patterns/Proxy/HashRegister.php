<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/27/2017
 * Time: 3:15 PM
 */

namespace JimChen\Patterns\Proxy;

class HashRegister
{
    private $table = "proxyLog";

    private $hookup;
    /**
     * HashRegister constructor.
     */
    public function __construct()
    {
        $this->hookup = UniversalConnect::doConnect();
        $username = $this->hookup->real_escape_string(trim($_POST['uname']));
        $pwNow = $this->hookup->real_escape_string(trim($_POST['pw']));
        $sql = sprintf(
            "INSERT INTO %s (uname, pw) VALUES ('%s', '%s')", $this->table, $username, md5($pwNow));

        if (empty($username) || empty($pwNow)) {
            echo "Registration fail:";
            exit();
        }
        if ($this->hookup->query($sql)) {
            echo "Registration completed:";
        } elseif (($result = $this->hookup->query($sql)) === false) {
            printf("Invalid query: %s <br/> Whole query: %s <br/>", $this->hookup->error, $sql);
            exit();
        }
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
        $this->hookup->close();
    }
}
