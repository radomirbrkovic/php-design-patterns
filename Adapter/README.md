# Adapter Design Pattern

## Intent

- Adapter pattern lets classes work together even they have different interfaces, because of we make adapter class which implement interface which client expects.
- Wrap an existing class with a new interface.
- Impedance match an old component to a new system

Adapter design pattern, like real life adapters, allow us to use classes which are structurally different than we expect. You can imagine adapter as "electricity adapter" where we don't worry too much about electricity power, or business logic. Everything what we interested is to have same output from all devices which we will use. 

## Example

Most common use case of adapter design pattern is example of book and kindle.  In abstract level those objects are same and have same purpose, but their behavior is different. Our client wont worry how it works behind, everything what he want to do is open the book and read it. 

To solve this task: 
 1. We will make two classes `BookClass` and `KindleClass` which will implements `BookInterface` and `KindleInterface` with their distinctive behaviors.        
 2. Then we will make `EBookAdapterClass` which will implements `BookInterface` but in methods will call `KindleClass` object.  