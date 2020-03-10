<?php


namespace AbstractFactory\SamsContext;


use AbstractFactory\Implementation\AbstractMySQLBook;

/**
 * Class SamsMySQLBook
 * @package AbstractFactory\SamsContext
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class SamsMySQLBook extends AbstractMySQLBook
{
    /**
     * SamsMySQLBook constructor.
     */
    public function __construct()
    {
        $this->title  = "MySQL, 3rd Edition";
        $this->author = "Paul Dubois";
    }
}