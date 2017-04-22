<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/3/26
 * Time: 19:48
 */

namespace JimChen\Patterns\Factory\Entity;


abstract class Fodder
{
    protected $_type;

    /**
     * Fodder constructor.
     * @param $_type
     */
    public function __construct($_type)
    {
        $this->_type = $_type;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->_type;
    }
}