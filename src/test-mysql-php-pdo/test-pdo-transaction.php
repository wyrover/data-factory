<?php
    // ����dsn��username��passwd
    $dsn = 'mysql:host=localhost;port=3310;dbname=pdo_test';
    $username = 'root';
    $passwd = 'xiaotian';
 
    // ������Ӳ��ԣ����뾹Ȼ�ɹ���
    // ����PDO����
    try {
        $dbh = new PDO($dsn, $username, $passwd);
       
        // ��������
        $dbh->beginTransaction();
        $sql = "INSERT INTO blog(title) VALUES(:title)";
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':title'=>'insert title1'));
        $stmt->execute(array(':title'=>NULL));
        // �ύ����
        $dbh->commit();


    } catch (Exception $e) {
        echo 'Errors occur when data operation!\n';
        echo $e->getMessage();
        // �ع�����
        $dbh->rollBack();
    }
