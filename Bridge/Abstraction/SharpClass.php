<?php


namespace Bridge\Abstraction;


use Bridge\Interfaces\CircleInterface;

/**
 * Class SharpClass
 * @package Bridge\Abstraction
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
abstract class SharpClass
{
    /**
     * @var CircleInterface
     */
    protected  $circle;


    public function __construct(CircleInterface $circle)
    {
        $this->circle = $circle;
    }

    public abstract function draw(): void;

    /**
     * @return CircleInterface
     */
    public function getCircle(): CircleInterface
    {
        return $this->circle;
    }
}