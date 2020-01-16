<?php


namespace Bridge\Implementation;


use Bridge\Interfaces\CircleInterface;

/**
 * Class RedCircleClass
 * @package Bridge\Implementation
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class RedCircleClass implements CircleInterface
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
     * @var string
     */
    private $color = 'red';

    /**
     * @param float $radius
     * @param int $x
     * @param int $y
     */
    public function draw($radius, $x, $y): void
    {
        $this->radius = $radius;
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }

    /**
     * @return string
     */
    public function getCenter(): string
    {
        return $this->x." x ".$this->y;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return  $this->color;
    }
}
