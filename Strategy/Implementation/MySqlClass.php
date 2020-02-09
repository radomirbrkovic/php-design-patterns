<?php


namespace Strategy\Implementation;


use Strategy\Implementation\Interfaces\DatabaseInterface;

/**
 * Class MySqlClass
 * @package Strategy\Implementation
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class MySqlClass implements DatabaseInterface
{

    /**
     * @var string
     */
    protected $driver = 'mysql';

    /**
     * @param string $data
     * @return string
     */
    public function create(string $data): string
    {
        return $this->driver . " : ".$data;
    }
}