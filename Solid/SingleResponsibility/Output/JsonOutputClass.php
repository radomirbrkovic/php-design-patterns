<?php


namespace Solid\SingleResponsibility\Output;


use Solid\SingleResponsibility\Implementation\AreaClass;
use Solid\SingleResponsibility\Output\Interfaces\OutputInterface;

/**
 * Class JsonOutputClass
 * @package Solid\SingleResponsibility\Output
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class JsonOutputClass implements OutputInterface
{
    /**
     * @var AreaClass
     */
    private $areaClass;

    /**
     * JsonOutputClass constructor.
     * @param AreaClass $areaClass
     */
    public function __construct(AreaClass $areaClass)
    {
        $this->areaClass = $areaClass;
    }

    /**
     * @inheritDoc
     */
    public function getOutput()
    {
        return json_encode(['areaSum' => $this->areaClass->sumAreas() ]);
    }
}