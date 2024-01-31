<?php

$servername = "localhost";
$username = "root";
$password = "franz";
$dbname = "web_app";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$confirm_password = $_POST['confirm_password'];


if ($password !== $confirm_password) {
    header("Location: register.php?error=password_mismatch");
    exit();
}

$sql_check_username = "SELECT * FROM web_app.account WHERE username='$username'";
$result_check_username = $conn->query($sql_check_username);

if ($result_check_username->num_rows > 0) {
    header("Location: signup.php?username_exists=1");
    exit();
}

$sql = "INSERT INTO web_app.account (username, firstname, lastname, email, mobile, password) VALUES ('$username', '$firstname','$lastname','$email','$mobile','$password')";

if ($conn->query($sql) === TRUE) {

    header("Location: login-page.php");
} else {

    header("Location: signup.php?error=1");
}

$conn->close();
?>
