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
            $id = $i;
            $title = "title modify $i";            
            $sql = "UPDATE blog SET title=:title where id=:id";
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":title", $title);
            $stmt->execute();
        }


    } catch (Exception $e) {
        echo 'Fail to connect to database!\n';
        echo $e->getMessage();
    }
