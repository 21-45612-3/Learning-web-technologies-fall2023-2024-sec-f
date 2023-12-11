<?php
include("../models/db.php");
$con = connection();
if(isset($_REQUEST['item']) && isset($_REQUEST['price'])){
    $item = mysqli_real_escape_string($con, $_REQUEST['item']);
    echo $item; 
    $price = mysqli_real_escape_string($con, $_REQUEST['price']);
    echo $price; 

    $query = "INSERT INTO products(item, price) VALUES('$item', '$price')";
    
    if(mysqli_query($con, $query)){
        echo 'item added...';
    } else {
        echo 'error!!!';
    }
} else {
    echo 'item and price are not set in the POST request.';
}
?>
