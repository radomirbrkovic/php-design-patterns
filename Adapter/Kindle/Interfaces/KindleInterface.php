<?php


namespace Adapter\Kindle\Interfaces;

/**
 * Interface KindleInterface
 * @package Adapter\Kindle\Interfaces
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
interface KindleInterface
{
    public function unlock();
    public function pressNext();
    public function getPage():array;
}