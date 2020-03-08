<?php


namespace Builder\Implementation;


use Builder\Implementation\Interfaces\HouseBuilderInterface;

/**
 * Class HouseBuilderClass
 * @package Builder\Implementation
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class HouseBuilderClass implements HouseBuilderInterface
{

    /**
     * @var bool
     */
    protected $walls = false;

    /**
     * @var bool
     */
    protected $roof = false;

    /**
     * @var bool
     */
    protected $doors = false;

    /**
     * @var bool
     */
    protected $windows = false;

    /**
     * @var bool
     */
    protected $garage = false;


    public function setWalls(): void
    {
       $this->walls = true;
    }

    /**
     * @inheritDoc
     */
    public function hasWalls(): bool
    {
        return $this->walls;
    }

    public function setRoof(): void
    {
        $this->roof = true;
    }

    /**
     * @inheritDoc
     */
    public function hasRoof(): bool
    {
        return $this->roof;
    }

    public function setDoors(): void
    {
        $this->doors = true;
    }

    /**
     * @inheritDoc
     */
    public function hasDoors(): bool
    {
       return $this->doors;
    }

    public function setWindows(): void
    {
        $this->windows = true;
    }

    /**
     * @inheritDoc
     */
    public function hasWindows(): bool
    {
        return $this->windows;
    }

    public function setGarage(): void
    {
        $this->garage = true;
    }

    /**
     * @inheritDoc
     */
    public function hasGarage(): bool
    {
        return $this->garage;
    }
}