<?php

include '../connect.php';


$itemsid = filterRequest("itemsid");
$usersid = filterRequest("usersid");


deleteData("favorite", "favorite_usersid = $usersid AND favorite_itemsid = $itemsid");
