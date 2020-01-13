<?php


namespace Decorator\Json;


use Decorator\InputDataClass;
use Decorator\Interfaces\RenderDecoratorInterface;

/**
 * Class JsonRender
 * @package Decorator\Json
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class JsonRender implements RenderDecoratorInterface
{
    /**
     * @var InputDataClass
     */
    private  $inputData = null;

    public function __construct(InputDataClass $inputData)
    {
        $this->inputData = $inputData;
    }

    /**
     * @return string
     */
    public function renderData(): string
    {
        return json_encode($this->inputData->getData());
    }
}