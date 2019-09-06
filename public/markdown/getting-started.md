## Getting Started
Getting started with Octopi is quite simple.  First, check out the [Installation](/octopi/2/docs/installation) page (if you haven't already), and come back here.  So, you want to get started, let's do that.

All the routes are specified in `routes/web.php`, so go there.  It should look just like this:
```php
<?php
```

If it does, you're good to go.  Let's make a simple route, at '/'.
```php
<?php

Route::get('/', function() {
    return 'Hello, world!';
});
```

Now run the `symfony server:start` command:
```shell
symfony server:start
```

And go to `localhost:8000`.  It should output this.
```html
Hello, world!
```