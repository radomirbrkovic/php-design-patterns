<?php


namespace ChainOfResponsibility\Implementation;


use ChainOfResponsibility\Implementation\Exceptions\TooManyRequestsPerMinuteException;

/**
 * Class ThrottlingMiddlewareClass
 * @package ChainOfResponsibility\Implementation
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class ThrottlingMiddlewareClass extends MiddlewareAbstractClass
{
    /**
     * @var int
     */
    private $requestPerMinute;

    /**
     * @var
     */
    private $requestCounter;

    /**
     * @var int
     */
    private $time;

    public function __construct(int $requestPerMinute)
    {
        $this->requestPerMinute = $requestPerMinute;
        $this->requestCounter = 0;
        $this->time = time();
    }

    /**
     * @param string $email
     * @param string $password
     * @return bool
     * @throws TooManyRequestsPerMinuteException
     */
    public function check(string $email, string $password): bool
    {
        if(time() > $this->time + 60) {
            $this->time = time();
            $this->requestCounter = 0;
        }

        $this->requestCounter++;

        if($this->requestCounter > $this->requestPerMinute){
            throw new TooManyRequestsPerMinuteException();
        }


        return parent::check($email, $password);
    }
}