<?php

include '../connect.php';


$itemsid = filterRequest("itemsid");
$usersid = filterRequest("usersid");


deleteData("cart", "cart_id  = (SELECT cart_id FROM cart WHERE cart_usersid = $usersid AND cart_itemsid = $itemsid LIMIT 1)");
