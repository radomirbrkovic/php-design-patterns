<?php


namespace Solid\SingleResponsibility\Implementation;


use Solid\SingleResponsibility\Implementation\Interfaces\SharpInterface;

/**
 * Class AreaClass
 * @package Solid\SingleResponsibility\Implementation
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class AreaClass
{
    /**
     * @var array
     */
    private $sharps = [];

    /**
     * AreaClass constructor.
     * @param SharpInterface[] $sharps
     */
    public function __construct(array  $sharps)
    {
        $this->sharps = $sharps;
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
