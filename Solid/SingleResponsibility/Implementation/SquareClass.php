<?php


namespace Solid\SingleResponsibility\Implementation;


use Solid\SingleResponsibility\Implementation\Interfaces\SharpInterface;

/**
 * Class SquareClass
 * @package Solid\SingleResponsibility\Implementation
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class SquareClass implements SharpInterface
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
     * @inheritDoc
     */
    public function getArea(): float
    {
        return round(pow($this->side, 2), 2);
    }
}