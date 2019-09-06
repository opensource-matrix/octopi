## framework\Router\Route
*Inbuilt Octopi class for easy routing.*

Route is a `static` class, meaning all the methods in it are static.  It is not meant to be constructed, but you may call `method`s statically from outside the `class`.

<br>
 
#### Route::gets
*List of GET controllers.*
```php
public static $gets = [];
```

<br>
 
#### Route::posts
*List of POST controllers.*
```php
public static $posts = [];
```

<br>
 
#### Route::get
*Add a GET controller.*

```php
void Route::get(string $path, Closure|string $controller);
```

<br>
 
#### Route::post
*Add a POST controller.*

```php
void Route::post(string $path, Closure|string $controller);
```

<br>
 
#### Route::connect
*Handle the requested path.*
```php
void Route::connect(string $requestedPath, Symfony\HttpFoundation\Response $response);
```