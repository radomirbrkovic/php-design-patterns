<?php


namespace Decorator;

use Decorator\Json\JsonRender;
use Decorator\XML\XMLRender;
use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__, 1)."/vendor/autoload.php";

/**
 * Class DecoratorTest
 * @package Decorator
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class DecoratorTest  extends TestCase
{

    /**
     * @var InputDataClass
     */
    private  $inputData = null;


    /**
     * @return InputDataClass
     */
    public function getInputData(): InputDataClass
    {
        if($this->inputData){
            return  $this->inputData;
        }


        $this->inputData = new InputDataClass([
            'name' => 'John Doe',
            'phone' => '+1-202-555-0171'
        ]);

        return $this->inputData;
    }


    public function testJsonRender()
    {
        $data = $this->getInputData();

        $jsonRender = new JsonRender($data);
        $renderedData = json_decode($jsonRender->renderData(), true);
        $this->assertArrayHasKey('name', $renderedData);
        $this->assertArrayHasKey('phone', $renderedData);
    }

    public function testXmlRender()
    {
        $data = $this->getInputData();

        $xmlRender = new XMLRender($data);
        $xml = \XMLReader::xml($xmlRender->renderData());
        $xml->setParserProperty(\XMLReader::VALIDATE, true);
        $this->assertTrue($xml->isValid());
    }
}
