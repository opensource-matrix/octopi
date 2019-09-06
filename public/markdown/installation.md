## Installing Octopi
You can easily install Octopi from GitHub [here](https://github.com/opensource-matrix/octopi), using these commmands:
```shell
mkdir octopi-app
cd octopi-app
git remote add origin https://github.com/opensource-matrix/octopi
git pull origin master
```

### Setting Up
Now that you've done that, there are some things to clean up in your `octopi-app` folder.  Delete all the files & folders inside of the `public/` folder, except for `index.php` (It's crucial!).  Clear out the `routes/web.php` file until it looks like this:
```php
<?php
```
And there you go, you're ready to go with Octopi!