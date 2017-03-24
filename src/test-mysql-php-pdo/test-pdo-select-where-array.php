<?php
    // 设置dsn、username、passwd
    $dsn = 'mysql:host=localhost;port=3310;dbname=pdo_test';
    $username = 'root';
    $passwd = 'xiaotian';
 
    // 构造PDO对象
    try {
        $dbh = new PDO($dsn, $username, $passwd);

        $title = "test title 2";        
        $sql = "SELECT * FROM blog WHERE title = :title";       
        $stmt = $dbh->prepare($sql);        
        $stmt->bindParam(":title", $title, PDO::PARAM_STR);        
        $stmt->execute();
        // 以联合数组方式获取结果，并遍历结果
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            print $row['id']."\t";
            print $row['title']."\t";
        }


    } catch (Exception $e) {
        echo 'Fail to connect to database!\n';
        echo $e->getMessage();
    }
