<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/24/2017
 * Time: 2:41 PM
 */

namespace JimChen\Patterns\Wrapper\Sample;

/**
 * 接口
 * Class IComponent
 * @package JimChen\Patterns\Sample
 */
abstract class IComponent
{
    protected $data;
    protected $ageGroup;
    protected $feature;

    abstract public function setAge($ageNow);
    abstract public function getAge();
    abstract public function getFeature();
    abstract public function setFeature($fea);
}