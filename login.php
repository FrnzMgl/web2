<?php
if (isset($_POST['register'])){
header('Location:register.php');


}

// Database connection
$servername = "localhost";
$username = "root";
$password = "franz";
$dbname = "web_app";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// User input
$username = $_POST['username'];
$password = $_POST['password'];

// SQL query
$sql = "SELECT * FROM web_app.account WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header("Location: private.html");
} else {
    header("Location: login-page.php?error=1");
}

$conn->close();
?>