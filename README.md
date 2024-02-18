## Experiment interface+trait


### Client implementation (class implements interface and uses trait)

The `client implementation` means that we are using a class that implements an interface, and this implementation uses
a trait to satisfy the implemented behavior. Our goal is to try to extend the implemented behavior somehow. The behavior
is defined in the `Loggable` interface. The `ImplFirst` class implements the behavior by using a `LoggableTrait` trait.
The `LoggableTrait` uses `LogFileTrait`.

As we can see, we cannot change the behavior defined by traits in a flexible/extensible way without touching its implementation.
