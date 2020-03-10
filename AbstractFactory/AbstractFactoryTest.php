<?php


namespace AbstractFactory;


use AbstractFactory\Implementation\AbstractBookFactory;
use AbstractFactory\Implementation\Interfaces\BookInterface;
use AbstractFactory\OReillyContext\OReillyBookFactory;
use AbstractFactory\SamsContext\SamsBookFactory;
use PHPUnit\Framework\TestCase;

/**
 * Class AbstractFactoryTest
 * @package AbstractFactory
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class AbstractFactoryTest extends  TestCase
{

    public function testOReillyFactory()
    {
        /** @var OReillyBookFactory $OReillyBookFactory */
        $OReillyBookFactory = new OReillyBookFactory();
        $this->commonTestBody($OReillyBookFactory);
    }

    public function testSamsFactory()
    {
        /** @var SamsBookFactory $samsBookFactory */
        $samsBookFactory = new SamsBookFactory();
        $this->commonTestBody($samsBookFactory);
    }


    /**
     * Body for book factory tests
     * @param AbstractBookFactory $bookFactory
     */
    protected function commonTestBody(AbstractBookFactory $bookFactory)
    {
        /** @var BookInterface $phpBook */
        $phpBook = $bookFactory->makePHPBook();

        $this->assertEquals('PHP', $phpBook->getSubject());
        $this->assertNotEmpty($phpBook->getAuthor());
        $this->assertNotEmpty($phpBook->getTitle());

        /** @var BookInterface $mysqlBook */
        $mysqlBook = $bookFactory->makeMySQLBook();

        $this->assertEquals('MySQL', $mysqlBook->getSubject());
        $this->assertNotEmpty($mysqlBook->getAuthor());
        $this->assertNotEmpty($mysqlBook->getTitle());
    }
}