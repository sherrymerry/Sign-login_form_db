<?php
include('connection.php');
// Get form data
$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert data into branch table
$sql_query = "INSERT INTO `login/signin` (`email`,`password`,`name`) VALUES ('$email','$hashed_password','$name')";
$conn->query($sql_query);

if ($conn->query($sql_query) === TRUE) {
    header("Location: login_signin.php");
exit;
} else {
    echo "Error: " . $sql_query . "<br>" . $conn->error;
}