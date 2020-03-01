<?php


namespace ChainOfResponsibility;


use ChainOfResponsibility\Implementation\Interfaces\MiddlewareInterface;

/**
 * Class ServerClass
 * @package ChainOfResponsibility
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class ServerClass
{

    /**
     * Array of registered users
     * @var array
     */
    private $users = [];

    /**
     * @var MiddlewareInterface
     */
    private $middleware;

    /**
     * @param MiddlewareInterface $middleware
     */
    public function setMiddleware(MiddlewareInterface $middleware): void
    {
        $this->middleware = $middleware;
    }

    /**
     * @return array
     */
    public function getUsers(): array
    {
        return $this->users;
    }

    /**
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function login(string $email, string $password): bool
    {
        return $this->middleware->check($email, $password);
    }

    /**
     * @param string $email
     * @param string $password
     */
    public function register(string $email, string $password): void
    {
        $this->users[$email] = $password;
    }

}
