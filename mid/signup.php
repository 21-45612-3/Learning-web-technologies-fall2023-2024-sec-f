<?php 
session_start();

include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){

$user_name = $_POST['user_name'];
$password = $_POST['password'];

if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
//save to database
$user_id = random_num(20);
$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

mysqli_query($con, $query);
header("Location: login.php");
die;

}else {

    echo " please enter  valid information";
}}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>signup</title>
</head>
<body>
<form method="post">
<fieldset>
<legend>REGISTRATION</legend>
            

<div style="font-size: 20px; margin: 10px;">Signup</div>
ID: <input type="text" name="id" value=""><br>
password: <input type="password" name="password" value=""> <br>
confirm password: <input type="password" name="password" value=""> <br>
username: <input type="text" name="user_name" value=""> <br>

<hr>
<fieldset>
     <legend>user type</legend>
    <input type="radio" name="type" value="" /> user
    <input type="radio" name="type" value= /> admin
                       
                    </fieldset>
<hr> 

<br>
 <input type="submit" name="submit" value="signup">   
<a href="login.php">log in</a>

</form>
</fieldset>
</body>
</html>