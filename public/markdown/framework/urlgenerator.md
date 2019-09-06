## framework\Router\UrlGenerator
*Inbuilt Octopi class to generate Regexps from a string.*

UrlGenerator is made to generate Regexps from URIs to match with the requested path.

<br>
 
#### UrlGenerator
*Create a UrlGenerator instance.*

```php
new UrlGenerator();
```

<br>
 
#### UrlGenerator->convert
*Convert a path to a string.*

```php
string UrlGenerator->convert(string $path);
```

<br>
 
#### UrlGenerator->joinPaths
*Join and stylize any amount of paths.*

```php
string UrlGenerator->joinPaths(string $...);
```

<br>
