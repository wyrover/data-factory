<?php
    $username="root";
    $passwd="xiaotian";
    $dbname="pdo_test";
    $port = 3310;
    $file='d:/'.$dbname.'.sql';
    // ���챸������
    $cmd = "mysqldump --port " . $port . " -u".$username." -p".$passwd." ".$dbname." >".$file;
    // ִ�б�������
    system($cmd, $error);
    if ($error) {
        trigger_error("backup failed".$error);
    }
