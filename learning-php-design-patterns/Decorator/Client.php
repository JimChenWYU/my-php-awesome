<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/7
 * Time: 16:38
 */

namespace JimChen\Patterns\Decorator;


class Client
{

    /**
     * @var IComponent
     */
    private $basicSite;
    /**
     * Client constructor.
     */
    public function __construct()
    {
        /**
         * 获取组件的引用
         */
        $this->basicSite = new BasicSite();
        $this->basicSite = $this->wrapComponent($this->basicSite);
        $siteShow = $this->basicSite->getSite();
        $format = "<br/>&nbsp;&nbsp;<strong>Total= $";
        $price = $this->basicSite->getPrice();

        echo $siteShow . $format . $price . '</strong><p/>';
    }

    /**
     * 进行组件包装的方法
     *
     * @param IComponent $component
     * @return IComponent|Maintenance
     */
    private function wrapComponent(IComponent $component)
    {
        /**
         * 获取基本组件的引用，再通过具体化的装饰器进行`包装`，然后获得包装后的组件的引用
         * 只要是具有相同接口的装饰器就可以不断地进行包装
         */
        $component = new Maintenance($component);
        $component = new Video($component);
        $component = new Database($component);
        return $component;
    }
}