<?php

namespace Adapter\Book\Interfaces;

/**
 * Interface BookInterface
 * @package Adapter\Book\Interfaces
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
interface BookInterface
{
    public function turnPage();
    public function open();
    public function getPage():int;

}