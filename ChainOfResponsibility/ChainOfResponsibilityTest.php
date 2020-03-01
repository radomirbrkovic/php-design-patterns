<?php


namespace ChainOfResponsibility;


use ChainOfResponsibility\Implementation\Exceptions\EmailValidationException;
use ChainOfResponsibility\Implementation\Exceptions\PasswordValidationException;
use ChainOfResponsibility\Implementation\Exceptions\TooManyRequestsPerMinuteException;
use ChainOfResponsibility\Implementation\Exceptions\UserExistsException;
use ChainOfResponsibility\Implementation\RoleMiddlewareClass;
use ChainOfResponsibility\Implementation\ThrottlingMiddlewareClass;
use ChainOfResponsibility\Implementation\UserExistsMiddlewareClass;
use ChainOfResponsibility\Implementation\ValidationMiddlewareClass;
use PHPUnit\Framework\TestCase;

class ChainOfResponsibilityTest extends TestCase
{
    /**
     * @var ServerClass
     */
    private $server;


    public function setUp(): void
    {
        $this->server = new ServerClass();
        // Register users
        $this->server->register('admin@example.com', 'password1');
        $this->server->register('user@example.com', 'password2');

        // Set up chain of responsibility
        $middleware = new ThrottlingMiddlewareClass(5);
        $middleware->setNext(new ValidationMiddlewareClass($this->server))
                    ->setNext(new UserExistsMiddlewareClass($this->server))
                    ->setNext(new RoleMiddlewareClass());

        $this->server->setMiddleware($middleware);
        parent::setUp();
    }

    public function testThrottlingMiddleware(): void
    {
        $this->expectException(TooManyRequestsPerMinuteException::class);
        for($i = 0; $i <= 10; $i++)
        {
            $this->server->login('user@example.com', 'password2');
        }
    }


    /**
     * @dataProvider validationDataProvider
     * @param string $email
     * @param string $password
     * @param bool $valid
     * @param string|null $exception
     */
    public function testValidationMiddleware(string $email, string $password, bool $valid, string $exception = null): void
    {


        if(!$valid){
            $this->expectException($exception);
        }

        $this->assertEquals($valid, $this->server->login($email, $password));

    }

    /**
     * @dataProvider userExistsDataProvider
     * @param string $email
     * @param string $password
     * @param bool $valid
     * @param string|null $exception
     */
    public function testUserExistsMiddleware(string $email, string $password, bool $valid, string $exception = null): void
    {
        if(!$valid){
            $this->expectException($exception);
        }

        $this->assertEquals($valid, $this->server->login($email, $password));
    }

    /**
     * @return array
     */
    public function validationDataProvider(): array
    {
        $testCases = [];

        $testCases[] = [
            'email' => 'invalidEmailAddress',
            'password' => '',
            'valid' => false,
            'exception' => EmailValidationException::class
        ];

        $testCases[] = [
            'email' => 'user@example.com',
            'password' => '1234',
            'valid' => false,
            'exception' => PasswordValidationException::class
        ];

        $testCases[] = [
            'email' => 'user@example.com',
            'password' => 'password2',
            'valid' => true,
            'exception' => null
        ];

        return $testCases;
    }

    /**
     * @return array
     */
    public function userExistsDataProvider(): array
    {
        $testCases = [];

        $testCases[] = [
            'email' => 'unknownUser@example.com',
            'password' => '1234',
            'valid' => false,
            'exception' => UserExistsException::class
        ];

        $testCases[] = [
            'email' => 'user@example.com',
            'password' => '1234',
            'valid' => false,
            'exception' => PasswordValidationException::class
        ];

        $testCases[] = [
            'email' => 'user@example.com',
            'password' => 'password2',
            'valid' => true,
            'exception' => null
        ];

        return $testCases;
    }

}