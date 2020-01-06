<?php


namespace Adapter\Kindle;


use Adapter\Kindle\Interfaces\KindleInterface;

/**
 * Class KindleClass
 * @package Adapter\Kindle
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class KindleClass implements KindleInterface
{

    private  $page = 1;

    private  $totalPage = 100;

    public function pressNext(): void
    {
        $this->page++;
    }

    public function unlock(): void
    {}

    /**
     * @return array
     */
    public function getPage(): array
    {
        return [$this->page, $this->totalPage];
    }
}