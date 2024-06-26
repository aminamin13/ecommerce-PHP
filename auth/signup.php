<?php

include "../connect.php";

$username = filterRequest('username');
$password= sha1($_POST['password']);
$email = filterRequest('email');
$phone = filterRequest('phone');
$verifycode = rand(10000, 99999);

$stmt= $con->prepare("Select * from users where users_email = ? or users_phone = ?");
$stmt->execute(array($email, $phone));

$count = $stmt->rowCount();

if($count>0){
    printFailure("email or phone already exist");
}else{
    $data = array(
        "users_name" => $username,
        "users_email" => $email,
        "users_password" => $password,
        "users_phone" => $phone,
        "users_verifycode" => $verifycode,

    );
    sendEmail($email,"Verify Code Ecommerce App", "Your verify code is ". $verifycode);
insertData('users', $data);
    }