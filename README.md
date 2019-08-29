# Octopi
## Currently: [WORKING :D]
Octopi is a PHP framework for robust applications.
It's obviously incomplete, but it should work for smaller applications as of 2019-08-28.

## Routing
Routing with Octopi is simple, as it includes it's own Routing toolkit.  It currently supports the following methods:
- `GET`

```php
/*
Route::get(string PATH, string CONTROLLER) - When the said path is loaded, it will pass it to the Controller with the name
you provided.
*/
Route::get('/', 'index.php')
```

Here is the default `routes/routes.php` file, as an example.
```php
<?php
Route::get('/)
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