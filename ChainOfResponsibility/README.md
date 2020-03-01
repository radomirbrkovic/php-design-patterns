# Chain of Responsibility design pattern

## Intend 

- Avoid coupling the sender of a request to its receiver by giving more than one object a chance to handle the request. Chain the receiving objects and pass the request along the chain until an object handles it.
- Lunch-and-leave requests with a single processing pipeline that contains many possible handlers.
- An object-oriented linked list with recursive traversal.

**Chain of Responsibility** is behavioral design pattern that lets you pass request along a chain of handlers. Upon receiving a request, each handler decides either to process the request or to pass it to the next handler in the chain. 

Examples of mundane using chain of responsibility pattern are routers, middleware and validation services. Because they recognise type of HTTP request and its parameters then try to mapping them with request handler, check permissions and validate inputs data.     

## Example

 The most widely known use od the **Chain of Responsibility** pattern in PHP world is found in  **HTTP request middleware**. These are implemented by the most popular PHP frameworks and even got standardized as part of PSR-15.
 
 It works like this: HTTP request must pass thorough a stack of middleware objects in order to be handled by the app. Each middleware can either reject the  further processing of the request or pass it to the next middleware. Once the request successfully passes all middleware, the primary handler of the app can finally handle it.
 
 In purpose of illustrating **chain of responsibility** pattern,  we create our validation middleware that concerns about authentication and authorization processes.
 
 1. Create `MiddlewareInterface` with `setNext` and `check` public methods
 2. Create `MiddlewareAbstractClass` which will implement `MiddlewareInterface`
 3. Creating next classes that extends `MiddlewareAbstractClass`:
    - `UserExistsMiddlewareClass` that checks whether a user with given credentials exists, 
    - `ValidationMiddlewareClass` that check whether a given parameters have valid formats  
    - `RoleMiddlewareClass` that checks whether a user associated with the request has sufficient permissions.
    - `ThrottlingMiddlewareClass` that checks whether there are too many failed login requests
 4. Create `ServerClass` that is an application's class that acts as a real handler. The `ServerClass` uses the **CoR** pattern to execute a set of various authentication middleware before lunch some business logic associated with a request.    