<?php
    // 设置dsn、username、passwd
    $dsn = 'mysql:host=localhost;port=3310;dbname=pdo_test';
    $username = 'root';
    $passwd = 'xiaotian';
 
    // 这个例子不对，插入竟然成功了
    // 构造PDO对象
    try {
        $dbh = new PDO($dsn, $username, $passwd);
       
        // 开启事务
        $dbh->beginTransaction();
        $sql = "INSERT INTO blog(title) VALUES(:title)";
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':title'=>'insert title1'));
        $stmt->execute(array(':title'=>NULL));
        // 提交事务
        $dbh->commit();


    } catch (Exception $e) {
        echo 'Errors occur when data operation!\n';
        echo $e->getMessage();
        // 回滚事务
        $dbh->rollBack();
    }
