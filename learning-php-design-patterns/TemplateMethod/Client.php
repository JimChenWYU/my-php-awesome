<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/24/2017
 * Time: 5:01 PM
 */

namespace JimChen\Patterns\TemplateMethod;


class Client
{

    /**
     * Client constructor.
     */
    public function __construct()
    {
        $caption = "Modigliani painted elongated faces.";
        $mo = new ConcreateClass();
        $mo->templateMethod("modig.png", $caption);
    }
}