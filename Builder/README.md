# Builder design pattern 

## Intend 

- Separate the construction of a complex object from its representation so that same that the same construction process can create different representation.
- Parse a complex representation, create one of several targets 

 **Builder** is a creational design pattern that lets you construct complex objects step by step, The pattern allows you to produce different types and representation of an object using the same code construction.
 
 ## Example 
 
As example of **builder** design pattern we will process of building houses. 
 1. Create `HouseBuilderInterface` that define all houses builder necessary methods
 2. Create `HouseBuilderClass` that implement `HouseBuilderInterface` 
 3. Create `HouseDirectorClass` that is only responsible for execution for the building steps in a particular sequences.
