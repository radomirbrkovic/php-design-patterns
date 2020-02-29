<?php


namespace Solid\Implementation;


use Solid\Implementation\Interfaces\SharpInterface;

/**
 * Class AreaClass
 * @package Solid\Implementation
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class AreaClass
{
    /**
     * @var array
     */
    private $sharps = [];

    /**
     * @param SharpInterface $sharp
     */
    public function addSharp(SharpInterface $sharp): void
    {
        $this->sharps[] = $sharp;
    }
    /**
     * @return float
     */
    public function sumAreas(): float
    {
        $sum = 0;

        foreach ($this->sharps as $sharp) {
            $sum+= $sharp->getArea();
        }
        return $sum;
    }
}
