# Decorator Design Pattern

## Intend

- Decorator provide a flexible alternative to subclassing for extending functionality. 
- Client-specified embellishment of a core object by recursively wrapping it.

Decorator design pattern, as its name implies, we can change (decorate) and upgrading with additional functionality on a basic object. The pattern is very useful  in integration with third party services or stand alone solutions, in the cases we got different format of data and we have to reformatting them for using in our application.

## Example 

One of the most common use cases is example with different type of output from same inputs. In practice purpose  we will use one associative array stored in InputDataClass and render it in JSON and XML format through RenderDecoratorInterface.

To solve this task:  
   1. We will create `InputDataClass` which accept array as parameter in constructor and has getters and setters for data property.
   2. Create `JsonRender` and `XMLRender` classes which implement `RenderDecoratorInterface` whit `renderData` method.        