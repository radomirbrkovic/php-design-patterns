<?php


namespace Strategy\Implementation;


use Strategy\Implementation\Interfaces\DatabaseInterface;

/**
 * Class PostgreSqlClass
 * @package Strategy\Implementation
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class PostgreSqlClass implements DatabaseInterface
{

    /**
     * @var string
     */
    protected $driver = 'postgresql';

    /**
     * @param string $data
     * @return string
     */
    public function create(string $data): string
    {
        return $this->driver . " : ".$data;
    }
}