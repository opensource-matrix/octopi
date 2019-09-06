## Pointer Strings
`Pointer Strings` in Octopi normally reference to `string`s that point to a method in an `External Controller`.  The syntax is like this:

```php
'[Controller Name]@[Method Name]';
```

Which is the same as;

```php
$controller = new /*[Controller Name]*/;
$controller->/*[MethodName]*/;
```