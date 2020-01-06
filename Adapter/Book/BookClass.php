<?php
namespace Adapter\Book;


use Adapter\Book\Interfaces\BookInterface;

/**
 * Class BookClass
 * @package Adapter\Book
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class BookClass implements BookInterface
{

    /**
     * @var int
     */
    private $page = 1;

    public function turnPage()
    {
        $this->page++;
    }

    public function open()
    {
       $this->page = 1;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return  $this->page;
    }
}