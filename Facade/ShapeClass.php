<?php


namespace Facade;

use Facade\Implementation\CircleClass;
use Facade\Implementation\RectangleClass;
use Facade\Implementation\SquareClass;

/**
 * Class ShapeClass
 * @package Facade
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class ShapeClass
{

    /**
     * @param float $side
     * @return float
     */
    public function getSquareArea(float $side): float
    {
        $square = new SquareClass($side);
        return $square->calculateArea();
    }

    /**
     * @param float $a
     * @param float $b
     * @return float
     */
    public function getRectangleArea(float $a, float $b): float
    {
        $rectangle = new RectangleClass($a, $b);
        return $rectangle->calculateArea();
    }

    /**
     * @param float $radius
     * @return float
     */
    public function getCircleArea(float $radius): float
    {
        $circle = new CircleClass($radius);
        return $circle->calculateArea();
    }
}
