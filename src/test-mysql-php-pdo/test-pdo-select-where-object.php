<?php
    // ����dsn��username��passwd
    $dsn = 'mysql:host=localhost;port=3310;dbname=pdo_test';
    $username = 'root';
    $passwd = 'xiaotian';
 
    // ����PDO����
    try {
        $dbh = new PDO($dsn, $username, $passwd);

        $title = "test title 2";        
        $sql = "SELECT * FROM blog WHERE title = :title";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(":title", $title, PDO::PARAM_STR);
        $stmt->execute();
        // �Զ������鷽ʽ��ȡ��������������     
        while ($row = $stmt->fetchObject()) {
            print $row->id."\t";
            print $row->title."\t";
        }


    } catch (Exception $e) {
        echo 'Fail to connect to database!\n';
        echo $e->getMessage();
    }
