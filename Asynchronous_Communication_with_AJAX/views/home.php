<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: ../model/login.php");
    exit();
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
    <h2>Welcome, 
        
    <?php echo $user['name']; ?></h2>
    
    <p>Name: <?php echo $user['name']; ?></p>
    <p>Email: <?php echo $user['email']; ?></p>
    <p>Phone: <?php echo $user['phone']; ?></p>

</body>
</html>
