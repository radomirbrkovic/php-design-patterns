<?php


namespace AbstractFactory\Implementation\Interfaces;

/**
 * Interface BookInterface
 * @package AbstractFactory\Implementation\Interfaces
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
interface BookInterface
{

    /**
     * @return string
     */
    public function getAuthor(): string;

    /**
     * @return string
     */
    public function getTitle(): string;

    /**
     * @return string
     */
    public function getSubject(): string;

}
