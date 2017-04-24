<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/24/2017
 * Time: 2:43 PM
 */

namespace JimChen\Patterns\Wrapper\Sample;

/**
 * 具体组件
 * Class Male
 * @package JimChen\Patterns\Sample
 */
class Male extends IComponent
{


    /**
     * Male constructor.
     */
    public function __construct()
    {
        $this->data = 'Male';
        echo $this->data . '<br/>';
        $this->setFeature('<br/>Dude programmer feature: ');
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