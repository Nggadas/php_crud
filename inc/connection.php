<?php
//
//try {
//    $db = new PDO("sqlite:".__DIR__."/database.db");
//    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//} catch (Exception $e){
//    echo $e->getMessage();
//    exit;
//}

$servername = "localhost";
$username = "root";
$password = "root";

try {
    $db = new PDO("mysql:host=$servername;dbname=local_db", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e){
    echo "Connection failed: " . $e->getMessage();
    exit;
}