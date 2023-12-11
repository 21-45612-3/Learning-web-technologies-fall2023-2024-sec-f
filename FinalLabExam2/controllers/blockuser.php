

<?php
include("../models/db.php");
$con = connection();
session_start();


if(isset($_POST['block'])){
    $_SESSION['role'] = $_POST['role'];
   
}
    $role = $_POST['role'];

   

    if($role == ""){
        
        echo "<script>window.location='../views/adminhome.php'</script>";
    
    }else{
    if($role == 'buyer'){

        $sql = "DELETE * FROM buyer where name = '$name'";
        $result = mysqli_query($con , $sql);
        $row = mysqli_fetch_assoc($result);
        echo "<script>alert('BUYER DELETED') </script>";
        echo "<script>window.location='../views/adminhome.php'</script>";
          

        
    }elseif($role == 'seller'){
        $sql = "DELETE * FROM seller where name = '$name'";
        $result = mysqli_query($con , $sql);
        $row = mysqli_fetch_assoc($result);
    
        echo "<script>alert('SELLER DELETED') </script>";
        echo "<script>window.location='../views/adminhome.php'</script>";
    }
    
    else{

            echo "<script>alert('write either buyer or seller or admin correctly in role') </script>";
            echo "<script>window.location='../views/adminhome.php'</script>";
     
            
        }
    }
   
    
    

    ?>
