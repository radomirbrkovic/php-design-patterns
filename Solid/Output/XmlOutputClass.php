<?php


namespace Solid\Output;


use Solid\Implementation\AreaClass;
use Solid\Output\Interfaces\OutputInterface;

/**
 * Class XmlOutputClass
 * @package Solid\Output
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class XmlOutputClass implements OutputInterface
{
    /**
     * @var AreaClass
     */
    private $areaClass;

    /**
     * XmlOutputClass constructor.
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
        $doc = new \DOMDocument();
        $doc->appendChild($doc->createElement('areaSum', $this->areaClass->sumAreas()));
        return $doc->saveXML();
    }
}