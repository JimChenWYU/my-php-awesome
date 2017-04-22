<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/6
 * Time: 14:56
 */

namespace JimChen\Patterns\Prototype\Fly;


class FemaleProto extends IPrototype
{
    const gender = "FEMALE";
    public $fecundity;

    /**
     * FemaleProto constructor.
     */
    public function __construct()
    {
        $this->eyeColor = 'red';
        $this->wingBest = '220';
        $this->unitEyes = '760';
    }

    function __clone()
    {
        // TODO: Implement __clone() method.
    }
}