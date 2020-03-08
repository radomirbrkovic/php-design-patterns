<?php


namespace Builder;


use PHPUnit\Framework\TestCase;

/**
 * Class BuilderTest
 * @package Builder
 */
class BuilderTest extends TestCase
{

    /**
     * @var HouseDirectorClass
     */
    protected $houseDirector;

    public function  setUp(): void
    {
        parent::setUp();

        $this->houseDirector = new HouseDirectorClass();
    }

    public function testStandardHouseBuilder(): void
    {
        $standardHouse = $this->houseDirector->buildStandardHouse();

        $this->assertTrue($standardHouse->hasWalls());
        $this->assertTrue($standardHouse->hasRoof());
        $this->assertTrue($standardHouse->hasDoors());
        $this->assertTrue($standardHouse->hasWindows());
        $this->assertFalse($standardHouse->hasGarage());
    }

    public function testBuildFullHouse(): void
    {
        $fullHouse = $this->houseDirector->buildFullHouse();

        $this->assertTrue($fullHouse->hasWalls());
        $this->assertTrue($fullHouse->hasRoof());
        $this->assertTrue($fullHouse->hasDoors());
        $this->assertTrue($fullHouse->hasWindows());
        $this->assertTrue($fullHouse->hasGarage());
    }

}