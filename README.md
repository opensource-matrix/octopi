# Octopi
Octopi is a PHP framework for robust applications.  It includes:

- A routing system
- Models & views
- More soon!

## Routing
Octopi's routing system uses paths and controllers to get your user to where you want them to be.
```php
/* GET Request Routing */
$Route::get($path, $controller);
```
`$path` is a string of the path it calls the controller on, and `$controller` is a function that "controls" what the web page does.  