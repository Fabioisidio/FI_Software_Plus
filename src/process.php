<?php
require __DIR__ . '/classes/BDConnection.php';
require __DIR__ . '/function/selectUser.php';

$email_form = $_POST['email'];
$pass_form = $_POST['password'];

select($email_form);








