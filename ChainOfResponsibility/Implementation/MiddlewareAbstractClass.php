<?php


namespace ChainOfResponsibility\Implementation;


use ChainOfResponsibility\Implementation\Interfaces\MiddlewareInterface;

/**
 * Class MiddlewareAbstractClass
 * @package ChainOfResponsibility\Implementation
 * @author Radomir Brkovic <brkovic.radomir@gmail.com>
 */
 abstract class MiddlewareAbstractClass implements MiddlewareInterface
{

     /**
      * @var MiddlewareInterface
      */
    private $next;

     /**
      * @inheritDoc
      */
     public function setNext(MiddlewareInterface $middleware): MiddlewareInterface
     {
         $this->next = $middleware;
         return $middleware;
     }

     /**
      * @inheritDoc
      */
     public function check(string $email, string $password): bool
     {
        if(!$this->next){
            return true;
        }

        return $this->next->check($email, $password);
     }
 }