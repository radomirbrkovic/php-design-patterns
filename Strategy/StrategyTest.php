<?php


namespace Strategy;


use PHPUnit\Framework\TestCase;
use Strategy\Implementation\Interfaces\DatabaseInterface;
use Strategy\Implementation\MongoDbClass;
use Strategy\Implementation\MySqlClass;
use Strategy\Implementation\PostgreSqlClass;

/**
 * Class StrategyTest
 * @package Strategy
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class StrategyTest extends TestCase
{
    /**
     * @dataProvider databaseDataProvider
     * @param string $data
     * @param DatabaseInterface $database
     * @param string $expectedResult
     */
    public function testStrategyPattern(string $data, DatabaseInterface $database, string $expectedResult): void
    {
        $app = new AppClass;
        $this->assertEquals($expectedResult, $app->store($data, $database));
    }

    /**
     * @return array
     */
    public function databaseDataProvider(): array
    {
        $testCases = [];

        $testCases[] = [
            'data'          => 'test mysql insert',
            'database'      =>  new MySqlClass,
            'expectedResult'=> 'mysql : test mysql insert'
        ];

        $testCases[] = [
            'data'          => 'test postgresql insert',
            'database'      =>  new PostgreSqlClass,
            'expectedResult'=> 'postgresql : test postgresql insert'
        ];

        $testCases[] = [
            'data'          => 'test mongodb insert',
            'database'      =>  new MongoDbClass,
            'expectedResult'=> 'mongodb : test mongodb insert'
        ];

        return $testCases;
    }
}