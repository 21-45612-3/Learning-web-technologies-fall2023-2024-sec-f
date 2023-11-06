<?php 
 
session_start();
include("CreateDb.php");
include("component.php");

// for using the class
$database = new CreateDb("Productdb","Producttb");


if(isset($_POST['add'])){

//print_r($_POST['product_id']);

if(isset($_SESSION['cart'])){
   
   $sss= array_column($_SESSION['cart'],"product_id");
   
   if(in_array($_POST['product_id'],$sss)){

echo "<script>alert('item is already added') </script>";
echo "<script>window.location='index.php'</script>";
   }else{
$how_many_element = count($_SESSION['cart']);
$item_array = array(

    'product_id'=>$_POST['product_id']
);
$_SESSION['cart'][$how_many_element]=$item_array;
//print_r($_SESSION['cart']);

   }

}else{

    $item_array = array(

        'product_id'=>$_POST['product_id']
    );

    $_SESSION['cart'][0]= $item_array;
    print_r($_SESSION['cart']);
}
}

?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    
    <title>Shopping Cart</title>
 </head>
 <body>
 <?php 
 include("header.php"); 
 ?>
 <fieldset >

<legend >FOOD ITEMS</legend>

<?php 
$result = $database->getData();
while($row = mysqli_fetch_assoc($result)){

    component($row['product_name'],$row['product_price'],$row['product_img'],$row['id']);
}

?>

    </fieldset>


</body>
 </body>
 </html>