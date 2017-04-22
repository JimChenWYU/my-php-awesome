<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/6
 * Time: 14:58
 */

namespace JimChen\Patterns\Prototype\Fly;


class Client
{
    private $fly1;
    private $fly2;

    private $c1Fly;
    private $c2Fly;
    private $updatedCloneFly;

    /**
     * Client constructor.
     */
    public function __construct()
    {
        // 实例化
        $this->fly1 = new MaleProto();
        $this->fly2 = new FemaleProto();

        // 克隆
        $this->c1Fly = clone $this->fly1;
        $this->c2Fly = clone $this->fly2;
        $this->updatedCloneFly = clone $this->fly2;

        // 更新克隆
        $this->c1Fly->mated = 'true';
        $this->c2Fly->fecundity = '186';
        $this->updatedCloneFly->eyeColor = 'purple';
        $this->updatedCloneFly->wingBest = '220';
        $this->updatedCloneFly->unitEyes = '750';
        $this->updatedCloneFly->fecundity = '92';

        // 通过类型提示方法发送
        $this->showFly($this->c1Fly);
        $this->showFly($this->c2Fly);
        $this->showFly($this->updatedCloneFly);
    }

    private function showFly(IPrototype $fly)
    {
        echo 'Eye Color: ' . $fly->eyeColor . '<br/>';
        echo 'Wing Bests/second: ' . $fly->wingBest . '<br/>';
        echo 'Eye units: ' . $fly->unitEyes . '<br/>';
        $genderNow = $fly::gender;
        echo 'Gender: ' . $genderNow . '<br/>';
        if ($genderNow == 'FEMALE') {
            echo 'Number of eggs: ' . $fly->fecundity . '<br/>';
        } else {
            echo 'Mated: ' . $fly->mated . '<br/>';
        }
        echo '<br/>';
    }
}