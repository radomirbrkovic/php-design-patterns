<?php


namespace ChainOfResponsibility\Implementation;


use ChainOfResponsibility\Implementation\Exceptions\UserExistsException;
use ChainOfResponsibility\ServerClass;

/**
 * Class UserExistsMiddlewareClass
 * @package ChainOfResponsibility\Implementation
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class UserExistsMiddlewareClass extends MiddlewareAbstractClass
{
    /**
     * @var ServerClass
     */
    protected $server;

    /**
     * ValidationMiddlewareClass constructor.
     * @param ServerClass $server
     */
    public function __construct(ServerClass $server)
    {
        $this->server = $server;
    }

    /**
     * @param string $email
     * @param string $password
     * @return bool
     * @throws UserExistsException
     */
    public function check(string $email, string $password): bool
    {
        $users = $this->server->getUsers();
        if(!isset($users[$email]) || $users[$email] !== $password) {
            throw new UserExistsException();
        }

        return parent::check($email, $password);
    }

}