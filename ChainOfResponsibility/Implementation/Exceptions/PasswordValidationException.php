<?php


namespace ChainOfResponsibility\Implementation\Exceptions;

/**
 * Class PasswordValidationException
 * @package ChainOfResponsibility\Implementation\Exceptions
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class PasswordValidationException extends \Exception
{
    protected $message = "Given password doesn't match with stored user.";
}
