# Bridge design pattern 

## Intend

 - Separate an abstraction from its implementation.
 - The abstraction is an interface or abstract class and the implementor is also an interface or abstract class
 
 The bridge is a structure design pattern which allow to the abstraction and the implementation can be developed independently and the client code can access only the abstraction level without being concerned about implementation level.
 
 This pattern involves an interface which acts as a bridge which makes the functionality of concrete classes independent from interface implementer classes.  
 
 ## Example
 
 Mostly bridge design pattern we use when we have some complex class or set of closely related classes and we want to split them into two separated hierarchies, abstraction and implementation. 
 In concrete case we want to draw two independent circles, red and green, with concerning  only abut circle center, radius and type. 
 
 To solve this task:
 
 1. Create `CircleInterface` which will be a bridge between implementation and abstraction level.
 2. Create implementation later with two classes `RedCircleClass` and `GreenCircleClass`
 3. Create abstraction layer with `SharpClass`  as abstract class
 4. Create client class `CircleClass` which inherits `SharpClass`