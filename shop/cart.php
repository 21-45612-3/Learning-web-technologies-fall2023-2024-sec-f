<?php 

session_start();
include("component.php");
include("db.php");
 if(isset($_POST['remove'])){
    if($_GET['action']=='remove'){

        foreach($_SESSION['cart'] as $key=>$value){

            if($value["product_id"]==$_GET['id']){
                unset($_SESSION['cart'][$key]);
                echo "<script>alert('product has been removed')</script>";
                echo "<script>window.location='cart.php'</script>";
            }
        }
    }
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Cart</title>
</head>
<body>
 </br>
 <h1>MY CART</h1> <hr> </br>
 <?php
 $con = connection();
 $total = 0;
 if(isset($_SESSION['cart'])){

    $product_id = array_column($_SESSION['cart'],'product_id');
$sql = "SELECT * FROM ta";

 $result = mysqli_query($con,$sql);
 while($row = mysqli_fetch_assoc($result)){
    foreach($product_id as $id){
            if($row['id'] == $id){
            cartITEMS($row['product_img'],$row['product_name'],$row['product_price'],$row['id']);
                $total = $total + (float)$row['product_price'];
        }
    }
}
 }else{

echo "<h5>cart is empty!</h5>";
 }
?>
 <h3>price details</h3>

 <?php
 if(isset($_SESSION['cart'])){

    $count = count($_SESSION['cart']);
    echo "<h5>price ($count items) $$total</h5>";
    
 }else {
    echo "<h5>price (0 items)</h5>";
 }
 ?>
 
 <hr>
 <h5>amount payable $<?php echo $total;?></h5> 
 
 <form action="confirm.php" method="get">

<button type="submit" name="confirm"> confirm </button>
</form>
</body>
</html>