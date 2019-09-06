## Routing Arguments
Routing arguments are sent through the `Router` that's built in to Octopi and matches it to the request's path.  An argument can be requested like this:
```php
Route::get('/{argument}', function($argument) {
    return "Hello, {$argument}!";
});
```

Now go to `localhost:8000/John Doe`. (`localhost:8000/John%20Doe`)
```html
Hello, John Doe!
```