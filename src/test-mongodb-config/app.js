'use strict';

var fs = require('fs');
var mongoose = require('mongoose');
var path = require('path'); 


var env = process.env.NODE_ENV = process.env.NODE_ENV || 'development';
var config = require('./config');

console.log(env);
console.log(config.db);
console.log(config.port);


// Connect to MongoDB
console.log('Connecting to DB:', config.db);
mongoose.connect(config.db);


require('./user');


// 添加数据访问代码

var User = mongoose.model('User');

//exports.all = function(req, res) {
//  User.find({}, function(err, users) {
//    if(err) {
//      res.send(400);
//    }
//    res.send(users);
//  });
//};





console.log('hello world!');


