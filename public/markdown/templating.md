## Templating
Octopi uses it's built in `Sharp` templating engine to render views.

#### Using Sharp Models
When you call either the `view` or `markdown` methods, there is a required parameter called `$model`.  It should be an array with definitions with `keys` and `values`.

```php
Route::get('/', function() {
    return view('index_view', [
        'key' => 'value'
    ]);
});
```

So in `public/html/index_view.html` we write this code:

```html
<h1>@get('key')</h1>
```

And it should output (in HTML format):

```html
<h1>value</h1>
```