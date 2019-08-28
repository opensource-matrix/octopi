var chokidar = require('chokidar'),
    child_process = require('child_process');

var watcher = chokidar.watch('.', {ignored: /(pacakge-lock.json)/, persistent: true});

watcher
  .on('add', function(path) {
        child_process.execSync('publish.bat Automatic update.');
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