/*
Localhost your Octopi application.
*/

/* Load modules. */
var express = require('express'),
    fs = require('fs'),
    path = require('path');

/* Initialize PHP support, we'll use this more later. */
var phpSupport = require('express-php');
var phpExpress = phpSupport({
    binPath: 'php'
});

/* Set up Express to be our server. */
var app = express();

app.set('views', './views');
app.engine('php', phpExpress.engine);
app.set('view engine', 'php');

/* Redirect all .PHP requests to phpExpress. */
app.all(/.+\.php$/, phpExpress.router);

var server = app.listen(8080, (function() {
    var host = server.address().address;
    var port = server.address().port;
    console.log('Octopi application hosted at http://%s:%s\nMade with ❤️ by Matrix.', host, port);
}))