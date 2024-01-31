<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>
<body>


<?php
    if (isset($_GET['success'])) {
        echo '<p style="color: green;">Registration successful! You can now login.</p>';
    } elseif (isset($_GET['error'])) {
        echo '<p style="color: red;">Registration failed. Please try again.</p>';
    } elseif (isset($_GET['username_exists'])) {
        echo '<p style="color: red;">Username already exists. Please choose a different username.</p>';
    }
    ?>
    <h2>Register</h2>
    <form action="register.php" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required><br>

        <label for="firstname">First name:</label>
        <input type="text" id="firstname" name="firstname" required><br>
        
        <label for="lastname">Last name:</label>
        <input type="text" id="lastname" name="lastname" required><br>

        <label for="username">Email:</label>
        <input type="text" id="email" name="email" required><br>

        <label for="mobile">Mobile:</label>
        <input type="text" id="mobile" name="mobile" required><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br>
        
        <input type="submit" value="Register">
    </form>

</body>
</html>
