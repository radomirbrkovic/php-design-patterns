<?php


namespace Bridge;


use Bridge\Abstraction\SharpClass;
use Bridge\Interfaces\CircleInterface;

/**
 * Class Circle
 * @package Bridge
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class CircleClass extends  SharpClass
{

    /**
     * @var float
     */
    private $radius = 0;
    /**
     * @var int
     */
    private $x = 0;
    /**
     * @var int
     */
    private $y = 0;


    /**
     * Circle constructor.
     * @param $radius
     * @param $x
     * @param $y
     * @param CircleInterface $circle
     */
    public function __construct($radius, $x, $y, CircleInterface $circle)
    {   $this->radius = $radius;
        $this->x = $x;
        $this->y = $y;
        parent::__construct($circle);
    }

    public function draw(): void
    {
        $this->circle->draw($this->radius, $this->x, $this->y);
    }
}