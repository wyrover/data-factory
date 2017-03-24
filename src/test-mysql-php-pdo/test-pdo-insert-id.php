<?php
    // ����dsn��username��passwd
    $dsn = 'mysql:host=localhost;port=3310;dbname=pdo_test';
    $username = 'root';
    $passwd = 'xiaotian';
 
    // ����PDO����
    try {
        $dbh = new PDO($dsn, $username, $passwd);
       
        $title = 'test title';

        $sql = "INSERT INTO blog(title) VALUES(:title)";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(":title", $title);
        $stmt->execute();
        // ��ȡ��һ��֮�е�insert����������ݵ�idֵ
        echo $dbh->lastInsertId();


    } catch (Exception $e) {
        echo 'Errors occur when query data!\n';
        echo $e->getMessage();
    }
