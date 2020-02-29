# Single-responsibility Principle

**Definition**: _A class should have **one and only one** reason to change, meaning that a class should have only one job._

## Example

For example of single-responsibility design pattern we have some sharp and we want to calculate sum all the areas of the sharps. 
But we also want to obey different kind od output format such as XML and JSON.

1. Create `SharpInterface` with `getArea` method    
2. Create `CircleClass` and `SquareClass` which implements  `SharpInterface`
3. Create `AreaClass` which accepts array of sharp objects and has method `sumAreas`
4. Create `OutputInterface` with  `getOutput` method 
5. Create `JsonOutputClass` and `XmlOutputClass` which implements `OutputInterface` and accept `AreaClass` object in constructor 