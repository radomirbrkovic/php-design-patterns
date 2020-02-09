# Strategy design pattern

## Intend 

- Define a family of algorithms or class behaviors, encapsulate each other and make them interchangeable.
- Allows changing class algorithms or behaviors in run time.
- Capture abstraction in interfaces, bury implementation detail in derived classes

The strategy pattern belongs to group of behavior design pattern and as such main focus is on interface which define classes behavior.
Strategy pattern is useful when we have group of classes with similar behavior but also there is issue because client doesn't have full control when and what will be changed in classes implementation.

## Example 

In next example we want to support drivers for manipulation of different kind of databases and allow to client to choose where want to store his data in run time. 
 1. Create `DatabaseInterface` with `create` method.
 2. Create three classes `MySqlClass`, `PostgreSqlClass` and `MongoDbClass` which will implement `DatabaseInterface`
 3. Create context class `AppClass` with `store` method which accepts two parameters `data` and `dataBase` and call `create` method for given database
       
  