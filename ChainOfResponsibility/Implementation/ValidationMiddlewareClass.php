<?php


namespace ChainOfResponsibility\Implementation;


use ChainOfResponsibility\Implementation\Exceptions\EmailValidationException;
use ChainOfResponsibility\Implementation\Exceptions\PasswordValidationException;
use ChainOfResponsibility\ServerClass;

/**
 * Class ValidationMiddlewareClass
 * @package ChainOfResponsibility\Implementation
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class ValidationMiddlewareClass extends MiddlewareAbstractClass
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
     * @throws EmailValidationException
     * @throws PasswordValidationException
     */
    public function check(string $email, string $password): bool
    {
        if(!$this->isEmailValid($email)) {
            throw new EmailValidationException();
        }

        if(!$this->isPasswordValid($email, $password)){
            throw new PasswordValidationException();
        }

        return parent::check($email, $password);
    }



    /**
     * @param string $email
     * @return bool
     */
    private function isEmailValid(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    /**
     * @param string $email
     * @param string $password
     * @return bool
     */
    private function isPasswordValid(string $email, string $password): bool
    {
        if(isset($this->server->getUsers()[$email])){
            return $password === $this->server->getUsers()[$email];
        }

        return true;
    }
}