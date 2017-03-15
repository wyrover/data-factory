var jetpack = require('fs-jetpack');

var data = jetpack.read('file.txt');
console.log(data);


jetpack.readAsync('file.txt')
  .then(function(data) {
    console.log(data);
  });