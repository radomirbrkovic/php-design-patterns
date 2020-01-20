<?php


namespace Facade\Implementation;


use Facade\Implementation\Interfaces\ShapeInterface;

/**
 * Class SquareClass
 * @package Facade\Implementation
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class SquareClass implements ShapeInterface
{

    /**
     * @var float
     */
    private $side = 0;

    public function __construct(float $side)
    {
        $this->side = $side;
    }

    /**
     * @return float
     */
    public function calculateArea(): float
    {
        return round(pow($this->side, 2), 2);
    }
}