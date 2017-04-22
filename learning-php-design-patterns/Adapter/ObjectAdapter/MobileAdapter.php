<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/7
 * Time: 12:27
 */

namespace JimChen\Patterns\Adapter\ObjectAdapter;


class MobileAdapter implements IFormat
{
    /**
     * @var IMobileFormat
     */
    private $mobile;

    /**
     * MobileAdapter constructor.
     * @param IMobileFormat $mobile
     */
    public function __construct(IMobileFormat $mobile)
    {
        $this->mobile = $mobile;
    }

    public function formatCSS()
    {
        // TODO: Implement formatCSS() method.
        $this->mobile->formatCSS();
    }

    public function formatGraphics()
    {
        // TODO: Implement formatGraphics() method.
        $this->mobile->formatGraphics();
    }

    public function horizontalLayout()
    {
        // TODO: Implement horizontalLayout() method.
        $this->mobile->verticalLayout();
    }


}