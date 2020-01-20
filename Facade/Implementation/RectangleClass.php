<?php


namespace Facade\Implementation;


use Facade\Implementation\Interfaces\ShapeInterface;

/**
 * Class RectangleClass
 * @package Facade\Implementation
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class RectangleClass implements ShapeInterface
{
    /**
     * @var float
     */
    private $a = 0;

    /**
     * @var float
     */
    private  $b = 0;

    public function __construct(float $a, float $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    /**
     * @return float
     */
    public function calculateArea(): float
    {
        return round($this->a * $this->b, 2);
    }
}