<?php

    // Initialize the session
    session_start(); 
    $str = $_SESSION['username'];
    $str = strtoupper($str);
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
   
        <div class="page-header">
            <h1> 
                Hi, <b><?= $str ?></b>. Welcome to our site.
            </h1>

        </div>
        
        <p>
            <a href="reset-password.php" class="btn btn-warning">Reset your password</a>
            <a href="logout.php" class="btn btn-danger">Sign out</a>
        </p>
    </body>
</html>