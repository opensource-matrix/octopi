# Octopi
Octopi is a PHP framework for robust applications.  It includes:

- A routing system
- Models & views
- More soon!

## Routing
Octopi routing uses a URI and a `Closure` to provide an easy way to Route your website.

```php
$Route::get('/', function() {
    return 'Hello, world!';
});
```

You may pass arguments as such:

```php
$Route::get('/:page', function($page) {
    return $page;
});
```

At `/hello`, it would output:
```
hello
```

### It supports the current methods:

# Contributing
**Hey!**  Thanks for taking the time to contribute!  If you think there is an error, feel free to report it via a `pull request` or issue.