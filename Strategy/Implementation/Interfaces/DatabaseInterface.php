<?php


namespace Strategy\Implementation\Interfaces;

/**
 * Interface DatabaseInterface
 * @package Strategy\Implementation\Interfaces
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
interface DatabaseInterface
{

    /**
     * @param string $data
     * @return string
     */
    public function create(string $data): string;
}