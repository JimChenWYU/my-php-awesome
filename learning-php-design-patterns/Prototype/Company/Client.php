<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/6
 * Time: 15:47
 */

namespace JimChen\Patterns\Prototype\Company;


class Client
{
    private $market;
    private $manage;
    private $engineer;
    private $research;

    /**
     * Client constructor.
     */
    public function __construct()
    {
        // 实例化部门
        $this->makeConProto();

        $Tess = clone $this->market;
        $this->setEmployee($Tess, 'Tess Smith', 101, 'ts101-1234', 'tess.png');
        $this->showEmployee($Tess);

        $Jacob = clone $this->market;
        $this->setEmployee($Jacob, 'Jacob Jones', 102, 'jj101-2234', 'jacob.png');
        $this->showEmployee($Jacob);

        $Ricky = clone $this->manage;
        $this->setEmployee($Ricky, 'Ricky Rodriguez', 203, 'rr203-5634', 'ricky.png');
        $this->showEmployee($Ricky);

        $Olivia = clone $this->engineer;
        $this->setEmployee($Olivia, 'Olivia Perez', 302, 'op301-1278', 'olivia.png');
        $this->showEmployee($Olivia);

        $John = clone $this->engineer;
        $this->setEmployee($John, 'John Jackson', 301, 'jj302-1454', 'john.png');
        $this->showEmployee($John);

        $Jim = clone $this->research;
        $this->setEmployee($Jim, 'Jim Chen', 402, 'RX402-6379', 'Jim.png');
        $this->showEmployee($Jim);
    }

    private function makeConProto()
    {
        $this->market = new Marketing();
        $this->manage = new Management();
        $this->engineer = new Engineering();
        $this->research = new Research();
    }

    private function showEmployee(IAcmePrototype $employeeNow)
    {
        $px = $employeeNow->getEmployeePic();
        echo "Image: {$px}<br/>";
        echo $employeeNow->getName() . '<br/>';
        echo $employeeNow->getDept() . ': ' . $employeeNow::UNIT . '<br/>';
        echo $employeeNow->getId() . '<br/>';
        echo '<br/>';
    }

    private function setEmployee(IAcmePrototype $employeeNow, $nm, $dp, $id, $px)
    {
        $employeeNow->setName($nm);
        $employeeNow->setDept($dp);
        $employeeNow->setId($id);
        $employeeNow->setEmployeePic($px);
    }
}