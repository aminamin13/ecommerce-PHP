<?php

include '../connect.php';


$itemsid = filterRequest("itemsid");
$usersid = filterRequest("usersid");


$data = array(
    "favorite_usersid" => $usersid,
    "favorite_itemsid" => $itemsid
);

insertData("favorite", $data);
