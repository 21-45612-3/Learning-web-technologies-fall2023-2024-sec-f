

<?php
include("../models/db.php");
$con = connection();
session_start();


if(isset($_POST['submit'])){
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['password'] = $_POST['password'];
   
    
}
    $name = $_SESSION['name'];
    $password = $_SESSION['password'] ;
    $role = $_POST['role'];

   

    if($name == "" || $password == "" || $role == ""){
        
        echo "<script>window.location='../views/login.html'</script>";
    
    }else{
    if($role == 'buyer'){

        $sql = "SELECT * FROM buyer where name = '$name'";
        $result = mysqli_query($con , $sql);
        $row = mysqli_fetch_assoc($result);
    
     
          
           
                if($password == $row["password"]){
    
                    echo "<script>window.location='../views/buyerhome.php'</script>";
                }else{
                    echo "<script>alert('Wrong Password') </script>";
                    echo "<script>window.location='../views/login.html'</script>";
    
                }

        
    }elseif($role == 'seller'){
        $sql = "SELECT * FROM seller where name = '$name'";
        $result = mysqli_query($con , $sql);
        $row = mysqli_fetch_assoc($result);
    
     
        if($password == $row["password"]){
    
            echo "<script>window.location='../views/sellerhome.php'</script>";
        }else{
            echo "<script>alert('Wrong Password') </script>";
            echo "<script>window.location='../views/login.html'</script>";

        }
    }elseif($role == 'admin'){
        $sql = "SELECT * FROM admin where name = '$name'";
        $result = mysqli_query($con , $sql);
        $row = mysqli_fetch_assoc($result);
    
     
        if($password == $row["password"]){
    
            echo "<script>window.location='../views/adminhomehome.php'</script>";
        }else{
            echo "<script>alert('Wrong Password') </script>";
            echo "<script>window.location='../views/login.html'</script>";

        }
    }
    
    else{

            echo "<script>alert('write either buyer or seller or admin correctly in role') </script>";
            echo "<script>window.location='../views/login.html'</script>";
            
        }
    }
   
    
    

    ?>
