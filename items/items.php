<?php

include '../connect.php';

$catergoryid = filterRequest('id');


$items = getAllData("itemsview", "categories_id = $catergoryid");
