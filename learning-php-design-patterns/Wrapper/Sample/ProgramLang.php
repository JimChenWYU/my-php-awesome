<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 4/24/2017
 * Time: 3:00 PM
 */

namespace JimChen\Patterns\Wrapper\Sample;

/**
 * 具体装饰器
 * Class ProgramLang
 * @package JimChen\Patterns\Sample
 */
class ProgramLang extends Decorator
{
    protected $languageNow;

    private $language = [
        'php' => 'PHP',
        'cs' => 'C#',
        'js' => 'JavaScript'
    ];
    /**
     * ProgramLang constructor.
     */
    public function __construct(IComponent $dataNow)
    {
        $this->data = $dataNow;
    }


    public function getFeature()
    {
        // TODO: Implement getFeature() method.
        $output = $this->data->getFeature();
        $fmat = '<br/>&nbsp;&nbsp;';
        $output .= "$fmat Preferred programming language: ";
        $output .= $this->languageNow;
        return $output;
    }

    public function setFeature($fea)
    {
        // TODO: Implement setFeature() method.
        $this->languageNow = $this->language[$fea];
    }
}