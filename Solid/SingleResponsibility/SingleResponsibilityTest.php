<?php


namespace Solid\SingleResponsibility;


use PHPUnit\Framework\TestCase;
use Solid\SingleResponsibility\Implementation\AreaClass;
use Solid\SingleResponsibility\Implementation\CircleClass;
use Solid\SingleResponsibility\Implementation\SquareClass;
use Solid\SingleResponsibility\Output\JsonOutputClass;
use Solid\SingleResponsibility\Output\XmlOutputClass;

/**
 * Class SingleResponsibilityTest
 * @package Solid\SingleResponsibility
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class SingleResponsibilityTest extends TestCase
{

    /**
     * @return AreaClass
     */
    private function getArea(): AreaClass
    {
        return new AreaClass([
            new CircleClass(5),
            new SquareClass(3),
            new SquareClass(10.1)
        ]);
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