<?php


namespace Decorator;

/**
 * Class InputDataClass
 * @package Decorator
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class InputDataClass
{

    /**
     * @var array
     */
    private $data = [];

    public function __construct(array $data)
    {
        $this->setData($data);
    }


    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData(array  $data): void
    {
        $this->data = $data;
    }
}