<?php

function select($email_form)
{
    $conection = new BDConnection();

    $conection->conectar();
    $conn = $conection->conn;
    $query = "SELECT * FROM users where email = '$email_form'";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $result = $stmt->fetchAll();

    foreach ($result as $row) {
        echo $row['email'];
        echo $row['password'];
    }
}
