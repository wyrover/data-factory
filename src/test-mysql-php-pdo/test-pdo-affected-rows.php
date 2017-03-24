<?php
    // 设置dsn、username、passwd
    $dsn = 'mysql:host=localhost;port=3310;dbname=pdo_test';
    $username = 'root';
    $passwd = 'xiaotian';
 
    // 构造PDO对象
    try {
        $dbh = new PDO($dsn, $username, $passwd);
        
        $id = 1;

        $sql = "DELETE FROM blog WHERE id=:id";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        // 获取update、insert、delete操作后影响的行数
        echo $stmt->rowCount()." rows affected!";


    } catch (Exception $e) {
        echo 'Fail to connect to database!\n';
        echo $e->getMessage();
    }
