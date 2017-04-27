<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/27/2017
 * Time: 3:04 PM
 */

namespace JimChen\Patterns\Proxy;


class CreteTable
{
    private $table = "proxyLog";

    private $hookup;

    /**
     * CreteTable constructor.
     */
    public function __construct()
    {
        $this->hookup = UniversalConnect::doConnect();
        $drop = "DROP TABLE IF EXISTS {$this->table}";

        if ($this->hookup->query($drop) === true) {
            printf("Old table %s has been dropped.<br/>", $this->table);
        }

        $sql = "CREATE TABLE {$this->table} (uname NVARCHAR(15), pw NVARCHAR(120))";

        if ($this->hookup->query($sql) === true) {
            echo "Table {$this->table} has been created successfully. <br/>";
        }
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
        $this->hookup->close();
    }
}