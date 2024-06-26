<?php

include "../connect.php";

$email = filterRequest('email');
$password = sha1($_POST['password']);



$stmt = $con->prepare("select * from users where users_email = ? and users_password = ? and users_approve = 1");
$stmt->execute(array($email, $password));

$count = $stmt->rowCount();


result($count);

