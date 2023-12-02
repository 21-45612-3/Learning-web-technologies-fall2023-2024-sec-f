<?php

function registerEmployee($name, $username, $contact, $password) {
    $conn = new mysqli('localhost', 'root', '', 'shop');


    if ($conn->connect_error) {
        die("Connection failed: ");
    }

    $sql = "INSERT INTO employee (employee_name, contact_no, username, password) VALUES ('$name', '$contact', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $contact = $_POST["contact"];
    $password = $_POST["password"];

    registerEmployee($name, $username, $contact, $password);
}


function updateEmployee($employeeId, $name, $username, $contact, $password) {
    $conn = new mysqli('localhost', 'root', '', 'shop');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $name = mysqli_real_escape_string($conn, $name);
    $username = mysqli_real_escape_string($conn, $username);
    $contact = mysqli_real_escape_string($conn, $contact);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "UPDATE employee SET employee_name='$name', contact_no='$contact', username='$username', password='$password' WHERE employee_id=$employeeId";

    if ($conn->query($sql) === TRUE) {
        echo "Update successful!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employeeId = $_POST["employee_id"];
    $name = $_POST["name"];
    $username = $_POST["username"];
    $contact = $_POST["contact"];
    $password = $_POST["password"];

    updateEmployee($employeeId, $name, $username, $contact, $password);
}

function deleteEmployee($employeeId) {
    $conn = new mysqli('localhost', 'root', '', 'shop');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $employeeId = mysqli_real_escape_string($conn, $employeeId);

    $sql = "DELETE FROM employee WHERE employee_id=$employeeId";

    if ($conn->query($sql) === TRUE) {
        echo "Deletion successful!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["employee_id"])) {
    $employeeId = $_POST["employee_id"];

    deleteEmployee($employeeId);
}






