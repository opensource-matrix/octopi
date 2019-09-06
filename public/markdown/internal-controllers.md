## Internal Controllers
`Internal Controllers` are implemented inside of `routes/web.php`.  They are just `Closure`s as the 2nd argument of `Route::[method]` instead of a `pointer string`.

```php
Route::get('/path', function() {
    return 'Hello, path!';
});
```

You can do logic with them the same way as `External Controllers`, just as easily.

```php
Route::get('/{page}', function($page) {
    if($page == 'home') {
        return 'Oh, we\'re home now!';
    } else {
        return 'I want to go /home.';
    }
});
```