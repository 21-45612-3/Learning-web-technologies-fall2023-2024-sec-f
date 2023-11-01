<?php
session_start();

include("connection.php");
include("function.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>My website</title>
</head>
<body>
    <a href = "logout.php">Log out</a>
    <h1></h1>
    <br>
    <h1>HOME</h1>
</body>
</html>