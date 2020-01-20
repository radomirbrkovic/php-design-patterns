<?php


namespace Facade;


use PHPUnit\Framework\TestCase;

/**
 * Class FacadeTest
 * @package Facade
 */
class FacadeTest extends TestCase
{

    public function testShapes()
    {
        $shape = new ShapeClass();

        // test square area
        $this->assertEquals(36, $shape->getSquareArea(6));

        // test rectangle area
        $this->assertEquals(182.04, $shape->getRectangleArea(12.3, 14.8));

        // test circle  area
        $this->assertEquals(272.89, $shape->getCircleArea(9.32));
    }
}