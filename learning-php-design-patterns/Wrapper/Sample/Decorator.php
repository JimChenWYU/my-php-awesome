<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/24/2017
 * Time: 2:50 PM
 */

namespace JimChen\Patterns\Wrapper\Sample;

/**
 * 装饰器参与者
 * Class Decorator
 * @package JimChen\Patterns\Sample\
 */
abstract class Decorator extends IComponent
{
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
}