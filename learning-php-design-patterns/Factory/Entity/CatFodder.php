<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/3/26
 * Time: 19:49
 */

namespace JimChen\Patterns\Factory\Entity;


class CatFodder extends Fodder
{

    /**
     * CatFodder constructor.
     */
    public function __construct()
    {
        parent::__construct('cat');
    }
}