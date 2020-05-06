<?php
session_start();





require 'functions.php';

if(isset($_POST['login'])){
   $login = login($_POST);
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <a href="logout.php">Logout</a>
    <h3>From Login</Form></h3>
    <?php if(isset($login['error'])) : ?>

        <p><?= $login['pesan']; ?></p>
    <?php  endif; ?>
    <form action="" method="POST">
    <ul>
        <li>
            <label>
            
            Username :
            <input type="text"name="username" autofocus autocapitalize="off" required>
            </label>
        </li>
        <li>
        <label>
            
            Password  :
            <input type="password"name="password"require>
            </label>
        </li>
        <li>
        <button type="submit"name="login">Login</button>
        
        </li>

    </ul>
    </form>
</body> 
</html>