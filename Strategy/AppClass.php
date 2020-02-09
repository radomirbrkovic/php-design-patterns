<?php


namespace Strategy;


use Strategy\Implementation\Interfaces\DatabaseInterface;

/**
 * Class AppClass
 * @package Strategy
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class AppClass
{

    /**
     * @param string $data
     * @param DatabaseInterface $database
     * @return string
     */
    public function store(string $data, DatabaseInterface $database): string
    {
        return $database->create($data);
    }

}