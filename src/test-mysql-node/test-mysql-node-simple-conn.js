var mysql = require('mysql');
var pool  = mysql.createPool({
  connectionLimit : 10,
  waitForConnections : true,
  host            : 'localhost',
  port            : 3310,
  user            : 'root',
  password        : 'xiaotian',
  database        : 'pdo_test'
});

pool.query('SELECT 1 + 1 AS solution', function(err, rows, fields) {
  if (err) throw err;

  console.log('The solution is: ', rows[0].solution);
});