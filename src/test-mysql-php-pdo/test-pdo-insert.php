<?php
    // 设置dsn、username、passwd
    $dsn = 'mysql:host=localhost;port=3310;dbname=pdo_test';
    $username = 'root';
    $passwd = 'xiaotian';
 
    // 构造PDO对象
    try {
        $dbh = new PDO($dsn, $username, $passwd);
        echo 'connect to database successfully!';

        for ($i = 1; $i <= 10; ++$i) {
            $title = "test title $i";
            $sql = "INSERT INTO blog(title) VALUES(:title)";
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(":title", $title);
            $stmt->execute();
        }


    } catch (Exception $e) {
        echo 'Fail to connect to database!\n';
        echo $e->getMessage();
    }
