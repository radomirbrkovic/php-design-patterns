<?php


namespace AbstractFactory\SamsContext;


use AbstractFactory\Implementation\AbstractBookFactory;
use AbstractFactory\Implementation\Interfaces\BookInterface;

/**
 * Class SamsBookFactory
 * @package AbstractFactory\SamsContext
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class SamsBookFactory extends AbstractBookFactory
{
    /**
     * @var string
     */
    private $context = "Sams";

    /**
     * @inheritDoc
     */
    function makePHPBook(): BookInterface
    {
        return new SamsPHPBook();
    }

    /**
     * @inheritDoc
     */
    function makeMySQLBook(): BookInterface
    {
        return new SamsMySQLBook();
    }
}
