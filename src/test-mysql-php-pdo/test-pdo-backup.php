<?php
    $username="root";
    $passwd="xiaotian";
    $dbname="pdo_test";
    $port = 3310;
    $file='d:/'.$dbname.'.sql';
    // 构造备份命令
    $cmd = "mysqldump --port " . $port . " -u".$username." -p".$passwd." ".$dbname." >".$file;
    // 执行备份命令
    system($cmd, $error);
    if ($error) {
        trigger_error("backup failed".$error);
    }
