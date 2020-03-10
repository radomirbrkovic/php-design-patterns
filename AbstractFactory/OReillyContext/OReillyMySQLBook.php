<?php


namespace AbstractFactory\OReillyContext;


use AbstractFactory\Implementation\AbstractMySQLBook;

/**
 * Class OReillyMySQLBook
 * @package AbstractFactory\OReillyContext
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class OReillyMySQLBook extends AbstractMySQLBook
{
    /**
     * OReillyMySQLBook constructor.
     */
    public function __construct()
    {
        $this->title  = "Managing and Using MySQL";
        $this->author = "Gorge Reese, Randy Jat Yarger and Tim King";
    }
}