<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/4/7
 * Time: 11:32
 */

namespace JimChen\Patterns\Adapter\ObjectAdapter;


class Desktop implements IFormat
{
    private $head = "<!doctype html><html><head>";
    private $headClose = "<meta charset='utf-8'><title>Desktop</title></head><body>";

    private $cap = "</body></html>";
    private $sampleText;

    public function formatCSS()
    {
        // TODO: Implement formatCSS() method.
        echo $this->head;
        echo "<link rel='stylesheet' href='ObjectAdapter/css/desktop.css'>";
        echo $this->headClose;
        echo "<h1>Hello, Everyone!</h1>";
    }

    public function formatGraphics()
    {
        // TODO: Implement formatGraphics() method.
        echo "<img class='pixRight' src='ObjectAdapter/images/123.jpg' width='720' height='480' alt='river'>";
    }

    public function horizontalLayout()
    {
        // TODO: Implement horizontalLayout() method.
        $dir = __DIR__;
        $textFile = realpath("{$dir}/text/lorem.txt");
        $textInfo = file_get_contents($textFile);
        $this->sampleText = $textInfo;
        echo "<div>{$this->sampleText}</div>";
        echo "<p/><div>{$this->sampleText}</div>";
    }

    public function closeHTML()
    {
        echo $this->cap;
    }
}
