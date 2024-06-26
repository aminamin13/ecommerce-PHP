<?php

include "../connect.php";
$email = filterRequest('email');
$verify = filterRequest('verifycode');


$stmt =$con->prepare("Select * from users where users_email = '$email' and users_verifycode = '$verify'");
$stmt->execute();

$count = $stmt->rowCount();
result($count);

?>