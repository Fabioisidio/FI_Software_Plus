<?php
require __DIR__ . "/../configs/session.php";
require __DIR__ . "/../configs/connection.php";

$email_user = $_POST["email"];
$pass_user = $_POST["password"];

$query_select_email = "SELECT * FROM users WHERE email = :email";

$stmt = $conn->prepare($query_select_email);
$stmt->bindParam(':email', $email_user);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $row) {
    $email_bd = $row['email'];
    $pass_bd = $row['password'];
    if ($email_bd == $email_user && $pass_bd == $pass_user) {
        echo "você logou";
    } else {
        header("location:" . __DIR__ . "/../login.php?login=erro");
    }
}






