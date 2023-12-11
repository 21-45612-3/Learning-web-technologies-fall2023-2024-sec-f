

<?php
include("../models/db.php");
$con = connection();
session_start();


if(isset($_POST['submit'])){
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['role'] = $_POST['role'];
}
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $password = $_SESSION['password'] ;
    $role = $_SESSION['role'] ;
   

    if($name == "" || $password == "" || $email == "" || $role == ""){
        //echo "<script>alert('All Fields are Required') </script>";
        echo "<script>window.location='registration.html'</script>";
    }elseif(strlen($password)<4){

    
        //echo "<script>alert('Password Must Be At Least 4') </script>";
        echo "<script>window.location='registration.html'</script>";
    

    }else{
        
        if($role == 'seller'){
            $sql = "INSERT INTO seller (name, email, password) VALUES ('$name', '$email', '$password')";
            mysqli_query($con, $sql);
            
            echo "<script>alert('Registration Successful as seller') </script>";
            echo "<script>window.location='login.html'</script>";
            

        }elseif($role == 'buyer'){
            $sql = "INSERT INTO buyer (name, email, password) VALUES ('$name', '$email', '$password')";
            mysqli_query($con, $sql);
            
            echo "<script>alert('Registration Successful as buyer') </script>";
            echo "<script>window.location='login.html'</script>";
            

        }else{

            echo "<script>alert('write either buyer or seller correctly in role') </script>";
            echo "<script>window.location='registration.html'</script>";
            
        }
    

   
    }

    ?>
