<?php
session_start();

if(!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

require 'functions.php';

// Ketika tombol login ditekan
if (isset($_POST['login'])) {
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
    <h3>From Login</h3>
    <form action="" method="POST">
    <?php if(isset($login['error'])) : ?>

        <p>username / password salah</p>
    <?php  endif; ?>
    <ul>
        <li>
            <label>
            
            Username :
            <input type="text" name="username" autofocus autocapitalize="off" required>
            </label>
        </li>
        <li>
        <label>
            
            Password  :
            <input type= "password" name="password" required>
            </label>
        </li>
        <li>
        <button type="submit" name="login">Login</button>
        
        </li>

    </ul>
    </form>
</body> 
</html>