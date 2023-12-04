<?php 

$conn = mysqli_connect('localhost','root','','shop');
if(isset($_POST['name'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    echo $_POST['name'];
    $query = "INSERT INTO user(name) VALUES('$name')";
    if(mysqli_query($conn,$query)){
    echo 'user added...';

    }else{
        echo 'error!!!';
    }
}

if(isset($_GET['name'])){
    echo $_GET['name'];
}
?>
