# Facade Design Pattern

## Intent

- Provide a unified higher-level interface that makes the subsystem easier to use.
- Wrap complex subsystem with a simpler interface which client can use without worrying about logic behind  

The Facade belongs in structure patterns and it involves a single class which provides simplified methods required by client and delegates calls to methods of existing subsystem class.

This pattern is useful when we have some complex subsystem (part of application)  which we have to often use. One of most common example of using this pattern is ORM architecture, where we have one class, model, which represent only one table but behind that model calls query builder class, relations, database connection, etc.

# Example

We are going to create subsystem which will calculate area for given shapes.
 1. Create `ShapeInterface`  which has one method `calculateArea` which return float
 2. Create three classes `SquareClass`, `RectangleClass` and `CircleClass` which implement `ShapeInterface`
 3. Create `ShapeClass` which will be facade for subsystem 
