/* Automatically push updates to Git. */

var chokidar = require('chokidar'),
    child_process = require('child_process');

var watcher = chokidar.watch('.', {ignored: /(pacakge-lock.json)/, persistent: true});

var crypto = require('crypto');
var current_date = (new Date()).valueOf().toString();
var random = Math.random().toString();

watcher
  .on('add', function(path) {
        child_process.execSync('publish.bat ' + crypto.createHash('sha1').update(current_date + random).digest('hex'));
        console.log('Found update.');
    })
  .on('change', function(path) {
        child_process.execSync('publish.bat Automatic update.');
        console.log('Found update.');
    })
  .on('unlink', function(path) {
        child_process.execSync('publish.bat Automatic update.');
        console.log('Found update.');
    })
  .on('error', function(path) {
    throw new Error('Error.');
  })