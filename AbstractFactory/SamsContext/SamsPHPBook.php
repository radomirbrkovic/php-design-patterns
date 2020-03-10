<?php


namespace AbstractFactory\SamsContext;


use AbstractFactory\Implementation\AbstractPHPBook;

/**
 * Class SamsPHPBook
 * @package AbstractFactory\SamsContext
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class SamsPHPBook extends AbstractPHPBook
{
    /**
     * SamsPHPBook constructor.
     */
    public function __construct()
    {
        $this->author = "George Schlossnagle";
        $this->title  = "Advanced PHP Programming";
    }
}