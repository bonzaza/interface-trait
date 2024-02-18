## Experiment interface+trait


### Client implementation (class implements interface and uses trait)

The `client implementation` means that we are using a class that implements an interface, and this implementation uses
a trait to satisfy the implemented behavior. Our goal is to try to extend the implemented behavior somehow. The behavior
is defined in the `Loggable` interface. The `ImplFirst` class implements the behavior by using a `LoggableTrait` trait.
The `LoggableTrait` uses `LogFileTrait`.

As we can see, we cannot change the behavior defined by traits in a flexible/extensible way without touching its implementation.

### Client injection (injected classes implement interface and use traits)

The `client injection` means that we are using an injected class that implements an interface, and this implementation uses
a trait to satisfy the implemented behavior. Our goal is to try to extend the behavior somehow. The behavior is defined in
the `Loggable` interface. The `ImplFirst` class implements the behavior by using a `LogFileTrait` trait. The `ImplSecond`
class implements the behavior by using a `LogTempFileTrait` trait. 

As we can see, we can change the behavior defined by traits in a flexible/extensible way, but we have to specify new trait
for any new behavior. Besides, we don't really have the mechanism to check that a trait really implements the methods
defined in the interface (you can find it out only by running code or running a static analysis tool).

### Normal injection (injected classes just use interface)

The `normal injection` means that we are using an injected class that implements and interface, and the implementation resides
in the implementation itself. Our goal is to try to extend the behavior somehow. The behavior is defined in the `Loggable`
interface. The `ImplFirst` class implements the behavior to log into a file on its own. The `ImplSecond` class implements
the behavior to log into a temporary file on its own.

As we can see, we can change the behavior in a flexible/extensible way. In addition, we have significantly fewer entities
(so the solutions is less complex), and we have the mechanism to check whether a class implements the methods defined in
the interface (it is highlighted in the IDE).
