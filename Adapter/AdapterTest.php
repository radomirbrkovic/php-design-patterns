<?php

namespace Adapter;

require_once dirname(__DIR__, 1)."/vendor/autoload.php";

use Adapter\Book\BookClass;
use Adapter\Book\EBookAdapterClass;
use Adapter\Book\Interfaces\BookInterface;
use Adapter\Kindle\KindleClass;
use PHPUnit\Framework\TestCase;

/**
 * Class AdapterTest
 * @package Adapter
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class AdapterTest extends TestCase
{

    /**
     * @dataProvider adapterDataProvider
     * @param BookInterface $book
     */
    public function testAdapterDesignPattern(BookInterface $book): void
    {
        $book->open();
        $book->turnPage();
        $this->assertEquals(2, $book->getPage());
    }

    /**
     * @return array
     */
    public function adapterDataProvider(): array
    {
        $testCases = [];

        $testCases[] =
            [
                'book' => new BookClass()
            ];

        $testCases[] =
            [
              'book' => new  EBookAdapterClass(new KindleClass)
            ];

        return $testCases;

    }
}