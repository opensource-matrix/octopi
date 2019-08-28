/*
Localhost your Octopi application.
*/

var express = require('express');
var php = require('express-php');
var app = express();
 
app.use(php.cgi('./views'));
app.use(express.static('./views'));
 
app.listen(4000);