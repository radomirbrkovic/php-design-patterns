<?php


namespace AbstractFactory\Implementation;


use AbstractFactory\Implementation\Interfaces\BookInterface;

/**
 * Class AbstractMySQLBook
 * @package AbstractFactory\Implementation
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class AbstractMySQLBook implements BookInterface
{

    /**
     * @var string
     */
    protected $author = "";

    /**
     * @var string
     */
    private $subject = "MySQL";

    /**
     * @var string
     */
    protected $title = "";

    /**
     * @inheritDoc
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @inheritDoc
     */
    public function getSubject(): string
    {
        return $this->subject;
    }
}