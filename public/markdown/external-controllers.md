## External Controllers
`External Controllers` are `Controller` php scripts in `public/` that handle requests for `routes/web.php`.

Each `External Controller` has the same file name as class name.  So for example, if you wanted a `Controller` called "BlogController", you'd make a file in `public/` called `BlogController.php`, and in it you would write this:

```php
<?php

class BlogController extends Controller {
    // ...
}
```

To make a handler function, add a `public function` to `BlogController`.  Let's call ours `show`.  It should contain the same logic as that of an `Internal Controller`.

```php
<?php

class BlogController extends Controller {
    public function show() {
        return 'Hello, world!';
    }
}
```

And in `routes/web.php`, pass a `pointer string` to the `Route::get` method.

```php
<?php

Route::get('/', 'BlogController@show');
```

Now if you navigate to `localhost:8000`, it should show:
```html
Hello, world!
```