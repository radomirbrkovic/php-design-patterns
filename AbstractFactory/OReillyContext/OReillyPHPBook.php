<?php


namespace AbstractFactory\OReillyContext;


use AbstractFactory\Implementation\AbstractPHPBook;

/**
 * Class OReillyPHPBook
 * @package AbstractFactory\OReillyContext
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class OReillyPHPBook extends AbstractPHPBook
{
    /**
     * OReillyPHPBook constructor.
     */
    public function __construct()
    {
        $this->title  = "Programing PHP";
        $this->author = "Rasmus Lerdofr and Kevin Tatroe";
    }

}