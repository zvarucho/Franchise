<?php

$host = 'localhost';
$db_name = 'franchise';
$db_user = 'root';
$db_pass = '';
$charset = 'utf8mb4';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

try{
    $pdo = new PDO(
        "mysql:host=$host;dbname=$db_name;charset=$charset", $db_user, $db_pass, $options
    );
}catch (PDOException $e){
    die("Помилка підключення бази даних: " . $e->getMessage());
}
?>