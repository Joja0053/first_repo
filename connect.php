<?php
$host = "localhost";
$username= "root";
$password= "mysql";
$dbname= "users";

try{
    $pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    echo  "Ошибка подключения" . $e->getMessage();
}