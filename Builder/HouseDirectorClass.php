<?php


namespace Builder;


use Builder\Implementation\HouseBuilderClass;
use Builder\Implementation\Interfaces\HouseBuilderInterface;

/**
 * Class HouseDirectorClass
 * @package Builder
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class HouseDirectorClass
{

    /**
     * @return HouseBuilderInterface
     */
    public function buildStandardHouse(): HouseBuilderInterface
    {
        $house = new HouseBuilderClass();
        $house->setWalls();
        $house->setRoof();
        $house->setDoors();
        $house->setWindows();
        return $house;
    }

    /**
     * @return HouseBuilderInterface
     */
    public function buildFullHouse(): HouseBuilderInterface
    {
        $house = new HouseBuilderClass();
        $house->setWalls();
        $house->setRoof();
        $house->setDoors();
        $house->setWindows();
        $house->setGarage();
        return $house;
    }

}
