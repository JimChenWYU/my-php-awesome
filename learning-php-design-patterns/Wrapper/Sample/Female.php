<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/24/2017
 * Time: 2:47 PM
 */

namespace JimChen\Patterns\Wrapper\Sample;

/**
 * 具体组件
 * Class Female
 * @package JimChen\Patterns\Sample
 */
class Female extends IComponent
{

    /**
     * Female constructor.
     */
    public function __construct()
    {
        $this->data = 'Female';
        echo $this->data . '<br/>';
        $this->setFeature('<br/>Grrrl programmer features: ');
    }

    public function setAge($ageNow)
    {
        // TODO: Implement setAge() method.
        $this->ageGroup = $ageNow;
    }

    public function getAge()
    {
        // TODO: Implement getAge() method.
        return $this->ageGroup;
    }

    public function getFeature()
    {
        // TODO: Implement getFeature() method.
        return $this->feature;
    }

    public function setFeature($fea)
    {
        // TODO: Implement setFeature() method.
        $this->feature = $fea;
    }
}