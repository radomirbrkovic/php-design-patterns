<?php


namespace AbstractFactory\Implementation;


use AbstractFactory\Implementation\Interfaces\BookInterface;

/**
 * Class AbstractPHPBook
 * @package AbstractFactory\Implementation
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class AbstractPHPBook implements BookInterface
{
    /**
     * @var string
     */
    protected $author = "";

    /**
     * @var string
     */
    private $subject = "PHP";

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