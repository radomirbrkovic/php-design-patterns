<?php


namespace ChainOfResponsibility\Implementation\Exceptions;

/**
 * Class TooManyRequestsPerMinuteException
 * @package ChainOfResponsibility\Implementation\Exceptions
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class TooManyRequestsPerMinuteException extends \Exception
{
    protected $message = 'Request limit exceeded! Please wait one minute and then try again.';
}
