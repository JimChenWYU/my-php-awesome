<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/6
 * Time: 15:44
 */

namespace JimChen\Patterns\Prototype\Company;


class Engineering extends IAcmePrototype
{
    const UNIT = 'Engineering';
    private $development = 'programming';
    private $design = 'digital artwork';
    private $sysAd = 'system administration';

    function setDept($orgCode)
    {
        // TODO: Implement setDept() method.
        switch ($orgCode) {
            case 301:
                $this->dept = $this->development;
                break;
            case 302;
                $this->dept = $this->design;
                break;
            case 303:
                $this->dept = $this->sysAd;
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