<?php
require 'functions.php';
$mahasiswa  = query("SELECT * FROM mahasiswa");
 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-color: skyblue; 
        }
        table {
           background-color:  yellow;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
<h1 align="center">Daftar Mahasiswa</h1>
<table border="1" cellpadding="10" cellpadding="0" align="center">
    <tr>
            <th>ID</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Aksi</th>
</tr>

    <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>

    <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $m['gambar']; ?>" width="78"></td>
        <td><?= $m['nrp']; ?></td>
        <td><?= $m['Nama']; ?></td>
        <td><?= $m['email']; ?></td>
        <td><?= $m['jurusan']; ?></td>
        <td>
        <a href="">ubah</a>  |  <a href="">hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
    
</body>
</html>