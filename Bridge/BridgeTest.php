<?php


namespace Bridge;


use Bridge\Implementation\GreenCircleClass;
use Bridge\Implementation\RedCircleClass;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{


    /**
     * @dataProvider circleDataProvider
     * @param CircleClass $circle
     * @param string $center
     * @param float $radius
     * @param string $color
     */
    public function testBridgePattern(
        CircleClass $circle,
        string $center,
        float $radius,
        string $color
    ):  void
    {
        $circle->draw();

        $this->assertEquals($center, $circle->getCircle()->getCenter());
        $this->assertEquals($radius, $circle->getCircle()->getRadius());
        $this->assertEquals($color, $circle->getCircle()->getColor());
    }


    /**
     * @return array
     */
    public function circleDataProvider(): array
    {
        $testCases = [];

        $testCases[] = [
            'circle' => new CircleClass(100, 10, 10, new RedCircleClass()),
            'center' => '10 x 10',
            'radius' => 100,
            'color'  => 'red'
        ];

        $testCases[] = [
            'circle' => new CircleClass(15.3, 1, 10, new GreenCircleClass()),
            'center' => '1 x 10',
            'radius' => 15.3,
            'color'  => 'green'
        ];

        return $testCases;
    }
}