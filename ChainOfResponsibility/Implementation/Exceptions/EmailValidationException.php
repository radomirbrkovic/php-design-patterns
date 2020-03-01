<?php


namespace ChainOfResponsibility\Implementation\Exceptions;

/**
 * Class EmailValidationException
 * @package ChainOfResponsibility\Implementation\Exceptions
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class EmailValidationException extends \Exception
{
    public $message = "The given email address has invalid format.";
}
