<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/6
 * Time: 15:41
 */

namespace JimChen\Patterns\Prototype\Company;


class Management extends IAcmePrototype
{
    const UNIT = 'Management';
    private $research = 'research';
    private $plan = 'plan';
    private $operations = 'operations';

    function setDept($orgCode)
    {
        // TODO: Implement setDept() method.
        switch ($orgCode) {
            case 201:
                $this->dept = $this->research;
                break;
            case 202;
                $this->dept = $this->plan;
                break;
            case 203:
                $this->dept = $this->operations;
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