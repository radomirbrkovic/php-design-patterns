<?php


namespace Strategy\Implementation;


use Strategy\Implementation\Interfaces\DatabaseInterface;

/**
 * Class MongoDbClass
 * @package Strategy\Implementation
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class MongoDbClass implements DatabaseInterface
{
    /**
     * @var string
     */
    protected $driver = 'mongodb';

    /**
     * @param string $data
     * @return string
     */
    public function create(string $data): string
    {
        return $this->driver . " : ".$data;
    }
}