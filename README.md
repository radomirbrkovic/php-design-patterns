# Design patterns

**Design pattern** or **design principle** is a general repeatable solution to a commonly occurring problem in software development. 
A design pattern isn't a  finished design that can be transformed directly into code. It is a description or template for how to solve a problem that can be used in many different situations. 

In this repository I covered several most common design principles from real worlds. Using design principles has many advantages such as 
increasing code quality, easier maintenance, speed up software and easier testing. 

Also there are a few disadvantages such as longer development time, choosing  the best pattern for concrete problem etc.     
   
## Dependencies

This solution is develop in docker environment so everything what you need is installed Docker version 19.* and your favorite text editor for code development. 

## Installation  and instructions
After you was cloning or downloading this repository in your local directory where you stored the repository run `docker-compose up -d` command installing and running docker image. 

For downloading dependencies by composer first please login on docker machine by `docker exec -it php_design_patterns bash` command and after that run `composer install` command. 

For running tests first please login on docker machine by `docker exec -it php_design_patterns bash ` command and after that run `php vendor/phpunit/phpunit/phpunit {Pattern}/{Patern}Test.php` 

## Design patterns

- [Abstract Factory](./AbstractFactory)
- [Adapter](./Adapter)
- [Bridge](./Bridge)
- [Builder](./Builder)
- [Chain of Responsibility](./ChainOfResponsibility)
- [Decorator](./Decorator)
- [Facade](./Facade)
- [Solid](./Solid)
- [Strategy](./Strategy)