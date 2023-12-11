<?php include_once 'db.php'; ?>

<html>
<head>
  <title>User List | Admin</title>
 
</head>
<body>
  <table border="1"
      >
    <tr>
      <td colspan="2"><center>Profile</center></td>
    </tr>
    <tr>
      <td>ID</td>
      <td>

      <?php
       include("../model/db.php");
       $con = connection();
        
        $sql = "SELECT * FROM buyer WHERE $row['id']";
        $result = mysqli_query($con, $sql);
        mysqli_num_rows($result);

        $sql1 = "SELECT * FROM seller WHERE $row['id']";
        $result1 = mysqli_query($con, $sql1);
        mysqli_num_rows($result1);
        if(mysqli_num_rows($result) > 0) {
          $row = mysqli_fetch_assoc($result);
          echo "<center>{$row['name']}</center>";

        } elseif(mysqli_num_rows($result1) > 0) {
            $row = mysqli_fetch_assoc($result);
            echo "<center>{$row['name']}</center>";
  
          }else {
          echo "<td>No data found</td>";
        }
      ?>

      </td>
    </tr>
    <tr>
      <td>NAME</td>
      <td>

      </td>
    </tr>
    <tr>
      <td>EMAIL</td>
      <td>

      </td>
    </tr>
    <tr>
      <td>USERTYPE</td>
      <td>
        
      </td>
    </tr>
    <tr>
      <td colspan="2"><center><a href="adminHome.php">Go Home</a></center></td>
    </tr>
  </table>
</body>
</html>