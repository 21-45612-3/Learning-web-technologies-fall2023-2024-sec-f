<?php
include("../model/db.php");
$con = connection();

$sql = "SELECT * FROM products";
$result = mysqli_query($con, $sql);


$items = mysqli_fetch_all($result, MYSQLI_ASSOC);


echo json_encode($items);
?>
