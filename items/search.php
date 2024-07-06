<?php


include '../connect.php';

$search = filterRequest("search");

getAllData("items1view", "items_name Like '%$search%' Or items_name_ar like '%$search%'");