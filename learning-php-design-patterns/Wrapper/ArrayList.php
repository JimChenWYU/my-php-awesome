<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/24
 * Time: 11:14
 */

namespace JimChen\Patterns\Wrapper;

/**
 * Class ArrayList
 * @package JimChen\Patterns\Wrapper
 */
class ArrayList
{
    /**
     * @var array
     */
    private $arr;

    /**
     * ArrayList constructor.
     * @param array $arr
     */
    public function __construct(array $_arr = [])
    {
        if (! is_array($_arr)) {
            throw new \Exception('params is not array.');
        }
        $this->arr = $_arr;
    }

    /**
     *
     *
     * @return int
     */
    public function size()
    {
        return count($this->arr);
    }

    /**
     * 获取一个元素
     *
     * @param $index
     * @return mixed
     */
    public function get($index)
    {
        return $this->arr[$index];
    }

    /**
     * 增加一个元素
     *
     * @param $value
     * @param null $index
     */
    public function add($value, $index = null)
    {
        if (isset($index)) {
            $this->arr[$index] = $value;
        } else {
            $this->arr[] = $value;
        }
    }

    /**
     * 返回原数组
     *
     * @return array
     */
    public function toArray()
    {
        return $this->arr;
    }
}