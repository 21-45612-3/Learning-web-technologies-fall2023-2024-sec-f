<?php
$conn = mysqli_connect('localhost' ,'root', '' ,'shop');
$query = 'SELECT * FROM user';
$result = mysqli_query($conn, $query);
$users = mysqli_fetch_all($result , MYSQLI_ASSOC);

echo json_encode($users);
?>