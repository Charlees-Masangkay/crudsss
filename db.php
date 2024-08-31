<?php
$host = 'localhost';
$db = 'products';
$user = 'root';
$pass = '';


try {
    $pdo = new PDO ("mysql:host=$host;dbname=products", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("could not connect to the database $db :" . $e->getMessage());

}
?>