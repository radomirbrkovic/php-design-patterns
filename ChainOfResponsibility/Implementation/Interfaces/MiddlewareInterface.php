<?php


namespace ChainOfResponsibility\Implementation\Interfaces;

/**
 * Interface MiddlewareInterface
 * @package ChainOfResponsibility\Implementation\Interfaces
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
interface MiddlewareInterface
{
    /**
     * @param MiddlewareInterface $middleware
     * @return MiddlewareInterface
     */
    public function setNext(MiddlewareInterface $middleware): MiddlewareInterface;

    /**
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function check(string $email, string $password): bool;

}
