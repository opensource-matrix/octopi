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

## Controllers
The Controller module is incomplete, but we plan to implement templating with views and models and other standard tools for MVC+PHP frameworks.  To create a new controller, make a file in the `controllers` folder with whatever name you want.

I'll go with `index.php`.  Now you can do whatever kind of default PHP code you want (once again, it's unfinished) but I'll use the default script:
```php
<?php

echo "Hello, world!<br>";
if($_GET['test']) {
    echo "Just a test!";
} else {
    echo "Is not just a test!!";
}
?>

<title>Home</title>
```

To utilize your controller, add a `Route` to the `routes/routes.php` folder.
```php
<?php
require_once 'route.php';

$routes = [
    new Route('/', 'index.php'),
];
```

## Hosting
To preview the above example, run the command:
```shell
symfony server:start
```
It should host at port `8000`.

If you go to `http://localhost:8000`, it should say:
```
Hello, world!
Is not just a test!!
```
Now try going to `http://localhost:8000`, the output should change:
```
Hello, world!
Just a test!
```