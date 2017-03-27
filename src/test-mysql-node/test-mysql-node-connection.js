var mysql      = require('mysql');
var fs = require('fs');
var path = require('path');
var child_process = require('child_process');


var pool =    mysql.createPool({
  connectionLimit : 100, //important
  host     : 'localhost',
  port     : 3310,
  user     : 'root',
  password : 'xiaotian',
  database : 'pdo_test',
  debug    :  false
});


pool.getConnection(function(err,connection){
  if (err) {
    connection.release();
    console.log({"code" : 100, "status" : "Error in connection database"});
    return;
  }

  console.log('connected as id ' + connection.threadId);

  connection.query("select * from blog",function(err,rows){
      connection.release();
      if(!err) {
        rows.forEach(function(row) {
          console.log(row.title);


        });



      }
  });

  connection.on('error', function(err) {
        console.log({"code" : 100, "status" : "Error in connection database"});
        return;
  });
});