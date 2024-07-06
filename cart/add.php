<?php


include '../connect.php';

$itemsid = filterRequest("itemsid");
$usersid = filterRequest("usersid");

$count = getData("cart", "cart_itemsid= $itemsid and cart_usersid = $usersid",null, false);


$data = array(
    "cart_itemsid" => $itemsid,
    "cart_usersid" => $usersid
);

insertData("cart", $data);
