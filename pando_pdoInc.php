<?php
$db_server = "localhost";
$db_user = "機密";
$db_passwd = "機密";
$db_name = "pando";
 
try {
    $dsn = "mysql:host=$db_server;dbname=$db_name";
    $dbh = new PDO($dsn, $db_user, $db_passwd);
    //echo 'Connection Succeed!';
}
catch (Exception $e){
    die('無法對資料庫連線');
}
 
$dbh->exec("SET NAMES utf8");
?>
