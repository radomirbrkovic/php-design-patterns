<?php


namespace Solid;


use PHPUnit\Framework\TestCase;
use Solid\Implementation\AreaClass;
use Solid\Implementation\CircleClass;
use Solid\Implementation\SquareClass;
use Solid\Output\JsonOutputClass;
use Solid\Output\XmlOutputClass;

/**
 * Class SOLIDTest
 * @package Solid
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class SOLIDTest extends TestCase
{

    /**
     * @return AreaClass
     */
    private function getArea(): AreaClass
    {
        $area = new AreaClass();
        $area->addSharp(new CircleClass(5));
        $area->addSharp(new SquareClass(3));
        $area->addSharp(new SquareClass(10.1));
        return  $area;
    }

    public function testJsonOutput()
    {
        $jsonOutput = new JsonOutputClass($this->getArea());
        $jsonData = json_decode($jsonOutput->getOutput(), true);
        $this->assertArrayHasKey('areaSum', $jsonData);
    }

    public function testXmlOutput()
    {
        $xmlOutput = new XmlOutputClass($this->getArea());
        $xml = \XMLReader::xml($xmlOutput->getOutput());
        $xml->setParserProperty(\XMLReader::VALIDATE, true);
        $this->assertTrue($xml->isValid());
    }
}