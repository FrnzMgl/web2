<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>

.box{

    margin:auto;
    width:200px;
    height: auto;
    background-color: lightgrey;
    padding: 20px;

}
</style>
</head>
<body>
    <h1>Welcome guest</h1>
    <div class="box">
    <form action="login.php" method="post">
        <div class ="container-login">
            <label for="username">Username:</label>
            <input class="transparent-textbox" type="text" id="username" name="username" required><br>
            
            <label for="password">Password:</label>
            <input class="transparent-textbox" type="password" id="password" name="password" required><br>
            
            <input type="submit" value="Login">
           
        </div>
        </form>
    </div>

   </body>
</html>