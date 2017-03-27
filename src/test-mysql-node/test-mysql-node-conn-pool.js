"use strict";
var mysql = require('mysql');

var mysqlConfig = {
    host : "127.0.0.1",
    port : 3310,
    user : "root",
    password : "xiaotian",
    database : "pdo_test",
    debug : false,
    connectionLimit : 1000,
};
var pool  = mysql.createPool(mysqlConfig);

function db(){
    pool.getConnection(function(err, connection) {
        if(err){
            console.log(err);
            return;
        }
        connection.end();
    });
}
var cnt=0;
process.nextTick(function P(){
    db();
    process.nextTick(P);
    console.log(++cnt);
});