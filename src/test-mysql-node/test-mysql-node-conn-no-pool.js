"use strict";
var mysql = require('mysql');

var mysqlConfig = {
    host : "127.0.0.1",
    port : 3310,
    user : "root",
    password : "xiaotian",
    database : "pdo_test",
    debug : false,
};

function db(){
    var conn = mysql.createConnection(mysqlConfig);
    conn.connect(function(err){
        conn.end();
    });
}
var cnt=0;
process.nextTick(function P(){
    db();
    process.nextTick(P);
    console.log(++cnt);
});