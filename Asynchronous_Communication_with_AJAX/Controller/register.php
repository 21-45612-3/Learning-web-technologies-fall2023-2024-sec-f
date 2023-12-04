<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
</head>
<body>
    <h2>Registration</h2>

    <?php
  
  include '../model/db.php';

  if (
      isset($_POST['name']) &&
      isset($_POST['phone']) &&
      isset($_POST['email']) &&
      isset($_POST['password'])
  ) {
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $password = $_POST['password'];
  
      $sql = "INSERT INTO persondb (name, phone, email, password) VALUES ('$name', '$phone', '$email', '$password')";
      
      if ($conn->query($sql) === TRUE) {
          header("Location: login.php");
          exit();
      } else {
          echo "Error: " ;
      }
  }
    ?>



<form id="registrationForm" action="" method="post">
    Name: <input type="text" name="name"><br>
    Phone: <input type="text" name="phone"><br>
    Email: <input type="email" name="email" id="email"><span id="emailAvailability"></span><br>
    Password: <input type="password" name="password" required><br>
    Confirm Password: <input type="password" name="confirm_password" required><br>
    <button type="button" onclick="checkEmail()">Check Email </button><br>
    <input type="submit" value="Register">
</form>

    <script>
        
        function checkEmail() {
            var email = document.getElementById("email").value;
            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("emailAvailability").innerHTML = this.responseText;
                }
            };

            xhttp.open("POST", "../model/check_email.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("email=" + email);
        }
    </script>
</body>
</html>
