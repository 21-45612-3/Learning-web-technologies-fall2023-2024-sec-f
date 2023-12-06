<?php

session_start();


if (!isset($_SESSION['username'])) {
  
    header("Location: login.html");
    exit();
}


$username = $_SESSION['username'];
$email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>User Profile</title>
  <style>
    body {
      text-align: center;
      padding: 50px;
    }
  </style>
</head>
<body>

  <h1>Welcome, <?php echo $username; ?>!</h1>

  <h2>Your Profile Information</h2>

  <p>Username: <?php echo $username; ?></p>
  <p>Email: <?php echo $email; ?></p>
  <p>Registration Date: <?php echo $registrationDate; ?></p>

  <p><a href="logout.php">Logout</a></p>

</body>
</html>
