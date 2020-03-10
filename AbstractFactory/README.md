# Abstract factory design pattern

## Intend

- Provide an interface for creating families of related or dependent objects without specifying their concrete classes.
- A hierarchy that encapsulates: many possible "platforms", and the construction of a suite of "products".
- The `new` operator considered harmful.

**Abstract factory** is creational design pattern that works around a super-factory which creates other factories. This factory is also called as factory of factories. 

In abstract factory pattern an interface is responsible for creating a factory of related objects without explicitly specifying their classes. Each generated factory can give the objects as the per the Factory pattern. 

## Example

The concrete factory must create the correct objects for it's context, insuring that all objects created by the concrete factory chosen to be able to work correctly for a given circumstances.

In this example we have an abstract factory, `AbstractBookFactory` that specifies two classes, `AbstractPHPBook` and `AbstractMySQLBook`, which will need to be created by the concrete factory.

The concrete class `OReillyBookFactory` extends `AbstractBookFatvory` and can create the `OReillyPHPBook` and `OReillyMySQLBook` classes which are the correct classes for the context of `OReilly` 