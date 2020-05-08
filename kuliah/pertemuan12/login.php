<?php

session_start();
if (isset($_SESSION['login'])) {
  header("Location: index.php");
  exit;
}

require 'functions.php';

if (isset($_POST['login'])) {
  login($_POST);
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
  <h3>form login</h3>
  <?php if (isset($login['error'])) : ?>
    <p><?= $login['pesan']; ?></p>
  <?php endif; ?>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Username
          <input type="text" name="username" autofocus autocomplete="off">
        </label>
      </li>
      <li>
        <label>
          Password
          <input type="password" name="password" autocomplete="off" required>
        </label>
      </li>
      <li>
        <button type="submit" name="login">Login</button>
      </li>
      <li>
        <a href="registrasi.php">Tambah Akun!</a>
      </li>
    </ul>
  </form>
</body>

</html>