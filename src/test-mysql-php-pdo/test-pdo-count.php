<?php
    // 设置dsn、username、passwd
    $dsn = 'mysql:host=localhost;port=3310;dbname=pdo_test';
    $username = 'root';
    $passwd = 'xiaotian';
 
    // 构造PDO对象
    try {
        $dbh = new PDO($dsn, $username, $passwd);
       

        // 构造count语句
        $sql = "SELECT COUNT(id) FROM blog";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        // 使用fetchColumn获取0列值
        echo $stmt->fetchColumn()." rows returned!";


    } catch (Exception $e) {
        echo 'Fail to connect to database!\n';
        echo $e->getMessage();
    }
