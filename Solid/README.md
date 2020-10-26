# S.O.L.I.D Design pattern 

**S.O.L.I.D** is acronym for the **first five object-oriented design (OOD) principles** by [Robert C. Martin](https://en.wikipedia.org/wiki/Robert_C._Martin).
These principles, when combined together, make it easy for a programmer to develop software that are easy to maintain and extend. They also make it easy for developers to avoid code smells, easy refactor code, and are also a part of the agile or adaptive software development.    

Many nowadays popular PHP frameworks implement **S.O.L.I.D** design principle in their core.   

### S.O.L.I.D stands for:

1. **S** - Single-responsibility principle
2. **O** - Open-closed principe 
3. **L** - Liskov substitution principle
4. **I** - Interface segregation principle
5. **D** - Dependency Inversion  principle
 
 
 ## Single-responsibility Principle
 
 **Definition**: _A class should have **one and only one** reason to change, meaning that a class should have only one job._
 
 ## Open-close Principle
 
 **Definition**: _Object or entities should be open for extension, but closed for modification._
 
 ## Liskov  substitute Principle
 
 **Definition**: _Let q(x) be a property provable about objects of x of type T. Then q(y) should be provable for objects y of type S where S is a subtype of T._
 
 ## Interface segregation  Principle
 
 **Definition**: _A client should never be forced to implement an interface that it doesn't use or client shouldn't be forced to depend on methods they don't use._

## Dependency inversion

**Definition** _Entities must depend on abstraction not on concretions. It states that the high level module must not depend on the low level module, but they should depend on abstractions._
 
 ## Example
 
 For example of S.O.L.I.D design pattern we have some sharp and we want to calculate sum all the areas of the sharps. 
 But we also want to obey different kind od output format such as XML and JSON.
 
 1. Create `SharpInterface` with `getArea` method    
 2. Create `CircleClass` and `SquareClass` which implements  `SharpInterface`
 3. Create `AreaClass` which has `addSharp` and `sumAreas`
 4. Create `OutputInterface` with  `getOutput` method 
 5. Create `JsonOutputClass` and `XmlOutputClass` which implements `OutputInterface` and accept `AreaClass` object in constructor 
