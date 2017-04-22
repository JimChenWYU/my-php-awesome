<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/6
 * Time: 16:55
 */

namespace JimChen\Patterns\Prototype\Company;


class Research extends IAcmePrototype
{
    const UNIT = 'Research';
    private $market = 'market';
    private $engineer = 'engineer';
    private $manage = 'manage';

    function setDept($orgCode)
    {
        // TODO: Implement setDept() method.
        switch ($orgCode) {
            case 401:
                $this->dept = $this->market;
                break;
            case 402:
                $this->dept = $this->engineer;
                break;
            case 403:
                $this->dept = $this->manage;
                break;
            default:
                $this->dept = 'Unrecognized Marketing';
                break;
        }
    }

    function getDept()
    {
        // TODO: Implement getDept() method.
        return $this->dept;
    }

    function __clone()
    {
        // TODO: Implement __clone() method.
    }

}