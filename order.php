<?php
include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$blackSeed = $_POST['blackSeed'];
$oliveOil = $_POST['oliveOil'];
$honey = $_POST['honey'];
$sweet = $_POST['sweet'];
$meat = $_POST['meat'];

$total = 1960*$blackSeed + 200*$oliveOil + 700*$honey + 120*$sweet + 500*$meat ;

$sql = "INSERT INTO orderList(name, email, mobile, total) VALUES ('$name', '$email', '$mobile', '$total')";

if($conn->query($sql)===TRUE) {
    header('location: list.php');
}

?>