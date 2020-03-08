<?php


namespace Builder\Implementation\Interfaces;

/**
 * Interface HouseBuilderInterface
 * @package Builder\Implementation\Interfaces
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
interface HouseBuilderInterface
{
    public function setWalls(): void;

    /**
     * @return bool
     */
    public function hasWalls(): bool;

    public function setRoof(): void;

    /**
     * @return bool
     */
    public function hasRoof(): bool;

    public function setDoors(): void;

    /**
     * @return bool
     */
    public function hasDoors(): bool;

    public function setWindows(): void;

    /**
     * @return bool
     */
    public function hasWindows(): bool;

    public function setGarage(): void;

    /**
     * @return bool
     */
    public function hasGarage(): bool;
}