<?php


namespace Facade\Implementation;


use Facade\Implementation\Interfaces\ShapeInterface;

/**
 * Class CircleClass
 * @package Facade\Implementation
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class CircleClass implements ShapeInterface
{

    /**
     * @var float
     */
    private $radius = 0;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return float
     */
    public function calculateArea(): float
    {
        return round(pow($this->radius, 2) * pi(), 2);
    }
}