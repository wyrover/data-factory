<?php
    // ����dsn��username��passwd
    $dsn = 'mysql:host=localhost;port=3310;dbname=pdo_test';
    $username = 'root';
    $passwd = 'xiaotian';
 
    // ����PDO����
    try {
        $dbh = new PDO($dsn, $username, $passwd);
        
        $id = 1;

        $sql = "DELETE FROM blog WHERE id=:id";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        // ��ȡupdate��insert��delete������Ӱ�������
        echo $stmt->rowCount()." rows affected!";


    } catch (Exception $e) {
        echo 'Fail to connect to database!\n';
        echo $e->getMessage();
    }
