<?php


namespace AbstractFactory\OReillyContext;


use AbstractFactory\Implementation\AbstractBookFactory;
use AbstractFactory\Implementation\Interfaces\BookInterface;

/**
 * Class OReillyBookFactory
 * @package AbstractFactory\OReillyContext
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class OReillyBookFactory extends AbstractBookFactory
{
    /**
     * @var string
     */
    private $context = "OReilly";

    /**
     * @inheritDoc
     */
    function makePHPBook(): BookInterface
    {
       return new OReillyPHPBook();
    }

    /**
     * @inheritDoc
     */
    function makeMySQLBook(): BookInterface
    {
        return new OReillyMySQLBook();
    }
}