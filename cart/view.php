<?php


include '../connect.php';

$usersid = filterRequest("usersid");


$data = getAllData("cartview", "cart_usersid=$usersid", null, false);

$stmt = $con->prepare("select sum(itemsprice) as totalprice, sum(countitems) as totalcount from cartview
where cartview.cart_usersid = $usersid group by cart_usersid");


$stmt->execute();

$datacountprice = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode(
    array("status" => "success", "datacart" => $data, "countprice" => $datacountprice)
);