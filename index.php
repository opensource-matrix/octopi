<?php
switch($_SERVER['PATH_INFO']) {
    case '/':
        echo 'This is the home page';
        break;
    case '/about':
        echo 'This is the about page';
        break;   
    default:
        echo 'Not found!';
}