<?php
    // ����dsn��username��passwd
    $dsn = 'mysql:host=localhost;port=3310;dbname=pdo_test';
    $username = 'root';
    $passwd = 'xiaotian';
 
    // ����PDO����
    try {
        $dbh = new PDO($dsn, $username, $passwd);
       

        // ����count���
        $sql = "SELECT COUNT(id) FROM blog";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        // ʹ��fetchColumn��ȡ0��ֵ
        echo $stmt->fetchColumn()." rows returned!";


    } catch (Exception $e) {
        echo 'Fail to connect to database!\n';
        echo $e->getMessage();
    }
