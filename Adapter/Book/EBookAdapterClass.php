<?php


namespace Adapter\Book;


use Adapter\Book\Interfaces\BookInterface;
use Adapter\Kindle\Interfaces\KindleInterface;

class EBookAdapterClass implements BookInterface
{
    /** @var KindleInterface  */
    private $kindle;

    public function __construct(KindleInterface $kindle)
    {
        $this->kindle = $kindle;
    }

    public function turnPage()
    {
        $this->kindle->pressNext();
    }

    public function open()
    {
        $this->kindle->unlock();
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->kindle->getPage()[0];
    }
}