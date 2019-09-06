## framework\Controller\Controller
*The controller model.*

The `Controller` class is meant to be extended by `Controller`s for usage with routing and etc.

#### Controller
*Create a Controller.*

```php
class ControllerName extends Controller {
    // ...
}
```

#### Controller->call
*Call a method inside of this controller.*

```php
mixed Controller->call(string $method, array $args);
```