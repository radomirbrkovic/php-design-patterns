<?php


namespace AbstractFactory\Implementation;


use AbstractFactory\Implementation\Interfaces\BookInterface;

/**
 * Class AbstractBookFactory
 * @package AbstractFactory\Implementation
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
abstract class AbstractBookFactory
{
    /**
     * @return BookInterface
     */
    abstract function makePHPBook(): BookInterface;

    /**
     * @return BookInterface
     */
    abstract function makeMySQLBook(): BookInterface;

}
