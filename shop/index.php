<?php 
 
session_start();

include("component.php");
include("db.php");

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
     // print_r($_SESSION['cart']);
  }
  }


?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

 


 <script>
$(document).ready(function(){
   var cmntcount = 2;
$("button").click(function(){
   cmntcount =cmntcount +2;
   $("#comments").load("loadcomnt.php", {
cmntnewcount: cmntcount

   });
});

});


 </script>
    <title>Shopping Cart</title>
 </head>
 <body>

<?php 
include("header.php");

?>
 
 <fieldset >

<legend >FOOD ITEMS</legend>

<?php 
$con = connection();
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //  $product_name = $_POST['product_name']; 
  //  $product_price = $_POST['product_price']; 
    //$product_img = $_POST['product_img']; 

    
//}

$sql = "SELECT * FROM ta";

 $result = mysqli_query($con,$sql);
 
   
   
 while($row = mysqli_fetch_assoc($result)){

    component($row['product_name'],$row['product_price'],$row['product_img'],$row['id']);
}


    

//component("p1",3.5,"./upload/pic1.jpg");


?>

    </fieldset>

     
    <fieldset>
<legend>comments: </legend>
<div id="comments">
<?php
$sql = "SELECT * FROM comments LIMIT 2";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result)){
      echo "<p>";
      echo $row['author'];
      echo "<br>";
      echo $row['message'];
      echo "</p>";

}

}else{
echo "There are no comments";
}
?>
</div>
<button>Show more comments </button>

    </fieldset>

</body>
 </body>
 </html>
