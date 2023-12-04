<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    
    <?php
    include '../model/db.php';

    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $sql = "SELECT * FROM persondb WHERE email = '$email' AND password = '$password'";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            session_start();
            $_SESSION['user'] = $user;
            header("Location: ../view/home.php");
            exit();
        } else {
            header("Location: register.php");
            exit();
        }
    }
    ?>

    


<form action="" method="post">
    Email: <input type="email" name="email" ><br>
    Password: <input type="password" name="password" ><br>
    <input type="submit" value="Login">
</form>
</body>
</html>
