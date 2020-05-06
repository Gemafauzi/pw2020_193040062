<?php
session_reset();

if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;

}


require 'functions.php';
$mahasiswa  = query("SELECT * FROM mahasiswa");
 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
<style>
    body{
        background-color: skyblue;
    }
        table {
           background-color:  yellow;
        }
    </style>
<h1 align="center">Daftar Mahasiswa</h1>
<a href="tambah.php">Tambah Data Mahasiswa</a>
<br></br>



<table border="1" cellpadding="10" cellpadding="0" align="center"width="1500px"
    <tr>
            <th>ID</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Aksi</th>
</tr>

    <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>

    <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $m['gambar']; ?>" width="250"></td>
        <td><?= $m['Nama']; ?></td>
        <td>
        <a href="detail.php?id=<?= $m['ID'];?>">lihat detail</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
    
</body>
</html>