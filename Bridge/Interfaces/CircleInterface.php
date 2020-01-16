<?php


namespace Bridge\Interfaces;

/**
 * Interface CircleInterface
 * @package Bridge\Interfaces
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
interface CircleInterface
{
    /**
     * @param float $radius
     * @param int $x
     * @param int $y
     */
    public function draw($radius, $x, $y): void;

    /**
     * @return float
     */
    public function getRadius(): float;

    /**
     * @return string
     */
    public function getCenter(): string;

    /**
     * @return string
     */
    public function getColor(): string;

}