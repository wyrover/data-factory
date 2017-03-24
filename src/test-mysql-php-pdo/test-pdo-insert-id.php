<?php
    // 设置dsn、username、passwd
    $dsn = 'mysql:host=localhost;port=3310;dbname=pdo_test';
    $username = 'root';
    $passwd = 'xiaotian';
 
    // 构造PDO对象
    try {
        $dbh = new PDO($dsn, $username, $passwd);
       
        $title = 'test title';

        $sql = "INSERT INTO blog(title) VALUES(:title)";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(":title", $title);
        $stmt->execute();
        // 获取上一个之行的insert语句插入的数据的id值
        echo $dbh->lastInsertId();


    } catch (Exception $e) {
        echo 'Errors occur when query data!\n';
        echo $e->getMessage();
    }
