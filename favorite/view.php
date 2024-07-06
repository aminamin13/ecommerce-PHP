<?php


include '../connect.php';

$usersid = filterRequest("usersid");


getAllData("myfavorite", "favorite_usersid = ? ", array($usersid));