<?php


namespace ChainOfResponsibility\Implementation;

/**
 * Class RoleMiddlewareClass
 * @package ChainOfResponsibility\Implementation
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
class RoleMiddlewareClass extends MiddlewareAbstractClass
{

    /**
     * @var array
     */
    private $adminsAccounts = [
        'admin@example.com'
    ];

    /**
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function check(string $email, string $password): bool
    {
        if(in_array($email, $this->adminsAccounts)){
            return true;
        }

        return parent::check($email, $password);
    }

}