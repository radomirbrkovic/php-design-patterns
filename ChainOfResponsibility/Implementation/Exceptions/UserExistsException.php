<?php


namespace ChainOfResponsibility\Implementation\Exceptions;

/**
 * Class UserExistsException
 * @package ChainOfResponsibility\Implementation\Exceptions
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class UserExistsException extends \Exception
{
    protected $message = "User with given credentials doesn't exists." ;
}
