<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "fisoftware";

try {
    $conn = new pdo("mysql:host=$host;dbname=$db", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
