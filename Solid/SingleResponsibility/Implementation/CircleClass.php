<?php


namespace Solid\SingleResponsibility\Implementation;


use Solid\SingleResponsibility\Implementation\Interfaces\SharpInterface;

/**
 * Class CircleClass
 * @package Solid\SingleResponsibility\Implementation
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class CircleClass implements SharpInterface
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
     * @inheritDoc
     */
    public function getArea(): float
    {
        return round(pow($this->radius, 2) * pi(), 2);
    }
}