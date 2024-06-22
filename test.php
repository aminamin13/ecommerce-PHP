<?php

include './connect.php';

$table = 'users';
//$name = filterRequest('namerequest');
$data = array(
    "users_name" => "amine",
    "users_email" => "amin@live.com",
    "users_phone" => "015678",
    "users_verifycode" => "54545",
);
$count = insertData($table , $data);