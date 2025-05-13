<?php
$host = 'localhost';
$db = 'products';
$user = 'root';
$pass = ''; // shyiramo password ya MySQL yawe niba iyihari

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
