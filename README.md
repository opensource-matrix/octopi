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
$Route::get('/', 'index.php')
```

Here is the default `routes/routes.php` file, as an example.
```php
$Route::get('/', 'index.php');
$Route::get('/home', 'index.php');
```

## Controllers
Controlling your web page can be done directly from the `routes/routes.php` file, or it can be done externally with a `Controller` in `controllers/`.

### Direct Controllers
To use `Direct Controllers`, you can pass a function to `$Route::get`.
```php
$Route::get('/', function() {
    echo "Hello, world!";
    /* Do whatever you'd like from here on. */
})
```

### External Controllers
`External Controllers` are helpful for keeping organized, but if you are just making a smaller application, I would recommend a `Direct Controller`.
Anywho, `External Controllers` are PHP files in the `controllers/` folder.
```php
/* controllers/index.php */
echo "Hello, world!";
```

And to use this controller, go to `routes/routes.php` and use the `$Route::get` method.
```php
/* routes/routes.php */
$Route::get('/', 'index.php');
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