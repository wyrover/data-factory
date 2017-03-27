<?php

$conn = mysqli_connect("localhost","root","xiaotian", "", 3310);


$sql = "DROP DATABASE IF EXISTS dddddddd_btech";
mysqli_query($conn, $sql) or die(mysqli_error($conn));

mysqli_query($conn, "CREATE DATABASE dddddddd_btech");

mysqli_select_db($conn, "dddddddd_btech") or die(mysqli_error($conn));
mysqli_select_db($conn, "dddddddd_btech") or die(mysqli_error($conn));

$SQL_DROP_TABLE = <<<EOF
DROP TABLE IF EXISTS `base_table_XXXXX`;
EOF;

$SQL_CREATE_TABLE = <<<EOF
CREATE TABLE `base_table_XXXXX` (
  `id` INTEGER(11) NOT NULL AUTO_INCREMENT,
  `hwid` VARCHAR(516) COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `class` VARCHAR(50) COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `memo` TEXT COLLATE utf8_general_ci,
  `flag` TINYINT(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `hwid` (`hwid`(333))

)ENGINE=MyISAM
AUTO_INCREMENT=1 CHARACTER SET 'utf8' COLLATE 'utf8_general_ci';
EOF;


$SQL_DROP_PROC = <<<EOF
DROP PROCEDURE IF EXISTS `proc_update_base_table_XXXXX`;
EOF;

$SQL_CREATE_PROC = <<<EOF
CREATE PROCEDURE `proc_update_base_table_XXXXX`
(
IN hwid VARCHAR(516),
IN memo TEXT,
IN flag TINYINT(4)
)   
BEGIN    
    UPDATE `base_table_XXXXX` SET `base_table_XXXXX`.memo = memo, `base_table_XXXXX`.flag = flag WHERE `base_table_XXXXX`.hwid = hwid;
END 
EOF;


$os_array = array(
    "WIN9x" => "1",
    "WINME" => "2",
    "WIN2000" => "3",
    "WINXP" => "4",
    "WINXPX64" => "41",
    "WIN2003" => "5",
    "VISTA" => "6",
    "VISTA64" => "61",
    "WIN7" => "7",
    "WIN7X64" => "71",
    "WIN8" => "8",
    "WIN8X64" => "81",
    "WIN81" => "82",
    "WIN81X64" => "821",
    "WIN10" => "10",
    "WIN10X64" => "101",
    "SERVER2008" => "51",
    "SERVER2008R2" => "52",
    "SERVER2012" => "53",
    "SERVER2012R2" => "54"
);

$arrlength = count($os_array);

echo $arrlength;



foreach($os_array as $key => $value) {

    $sql = preg_replace("/XXXXX/", $value, $SQL_DROP_TABLE);
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $sql = preg_replace("/XXXXX/", $value, $SQL_CREATE_TABLE);
    mysqli_query($conn, $sql) or die(mysqli_error($conn));

    $sql = preg_replace("/XXXXX/", $value, $SQL_DROP_PROC);
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $sql = preg_replace("/XXXXX/", $value, $SQL_CREATE_PROC);
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
}

$SQL_INSER_INTO = <<<EOF
INSERT INTO base_table_1 (hwid, class) SELECT nodejs_driver.base_table.hwid, nodejs_driver.base_table.class FROM nodejs_driver.base_table
EOF;

mysqli_query($conn, $SQL_INSER_INTO) or die(mysqli_error($conn));


echo "/nsuccessful.";