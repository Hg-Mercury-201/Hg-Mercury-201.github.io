<?php include('server.php');?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
   <!-- <script src="main.js"></script> -->
</head>
<body>
    <div class="header">
        <h2> Login </h2>

    </div>
    <form method="post" action="Login.php">
        <!-- display validation errors -->
        <?php include('errors.php');?>
        <div class="input-group">
            <label> Username </label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label> Password </label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" name="login"> Login </button>
        </div>
        <p>
            Not a member? <a href="register.php">Register</a>
        </p>
    </form>

</body>
</html>