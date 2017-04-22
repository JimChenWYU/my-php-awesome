<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/6
 * Time: 15:31
 */

namespace JimChen\Patterns\Prototype\Company;


abstract class IAcmePrototype
{
    protected $name;
    protected $id;
    protected $employeePic;
    protected $dept;

    abstract function setDept($orgCode);
    abstract function getDept();

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getEmployeePic()
    {
        return $this->employeePic;
    }

    /**
     * @param mixed $employeePic
     */
    public function setEmployeePic($employeePic)
    {
        $this->employeePic = $employeePic;
    }

    abstract function __clone();
}