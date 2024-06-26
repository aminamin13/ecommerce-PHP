<?php

include "../connect.php";
$email = filterRequest('email');
$verify = filterRequest('verifycode');


$stmt =$con->prepare("Select * from users where users_email = '$email' and users_verifycode = '$verify'");
$stmt->execute();

$count = $stmt->rowCount();
if($count>0){
    $data = array("users_approve" => 1);
    updateData('users', $data, "users_email = '$email'");
}else{
    printFailure("Wrong Verify Code");
}

?>