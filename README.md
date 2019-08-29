# Octopi
Octopi is a PHP framework for robust applications.
It's obviously incomplete, but it should work for smaller applications as of 2019-08-28.

## Routing
Routing with Octopi is easy with the inbuilt `class` `Route`.  It can be initialized like so:

```php
new Route('[PATH]', '[CONTROLLER FILE NAME]');
```

Here is the default `routes/routes.php` file, as an example.
```php
<?php
require_once 'route.php';

$routes = [
    new Route('/', 'index.php'),
    new Route('/home', 'index.php')
];
```