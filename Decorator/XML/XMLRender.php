<?php


namespace Decorator\XML;


use Decorator\InputDataClass;
use Decorator\Interfaces\RenderDecoratorInterface;

/**
 * Class XMLRender
 * @package Decorator\XML
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class XMLRender implements RenderDecoratorInterface
{
    /**
     * @var InputDataClass
     */
    private $inputData = null;

    public function __construct(InputDataClass $inputData)
    {
        $this->inputData = $inputData;
    }

    /**
     * @return string
     */
    public function renderData(): string
    {
        $doc = new \DOMDocument();
        foreach ($this->inputData->getData() as $key => $value){
            $doc->appendChild($doc->createElement($key, $value));
        }

        return $doc->saveXML();
    }
}