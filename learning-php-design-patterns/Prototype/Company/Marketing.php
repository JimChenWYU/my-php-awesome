<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/6
 * Time: 15:33
 */

namespace JimChen\Patterns\Prototype\Company;


class Marketing extends IAcmePrototype
{
    const UNIT = 'Marketing';
    private $sales = 'sales';
    private $promotion = 'promotion';
    private $strategic = 'strategic planning';

    function setDept($orgCode)
    {
        // TODO: Implement setDept() method.
        switch ($orgCode) {
            case 101:
                $this->dept = $this->sales;
                break;
            case 102;
                $this->dept = $this->promotion;
                break;
            case 103:
                $this->dept = $this->strategic;
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