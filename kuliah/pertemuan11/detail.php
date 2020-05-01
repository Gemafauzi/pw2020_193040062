<?php
require 'functions.php';
$id = $_GET['id'];
$m  = query("SELECT * FROM mahasiswa WHERE  id = $id");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
<h3>Detail Mahasiswa</h3>
    <ul>
        <li><img src="img/<?= $m['gambar']; ?>" width="200" alt=""></li>
        <li>NRP : <?= $m['nrp']; ?></li>
        <li>Nama : <?= $m['Nama']; ?></li>
        <li>Email : <?= $m['email']; ?></li>
        <li>Jurusan : <?= $m['jurusan']; ?></li>
        <li><a herf="">ubah</a> |  <a href="hapus.php?id=<? $m ['id']; ?>">hapus</a></li> 
        <li><a href="index.php">kembali ke daftar Mahasiswa</a></li>  
    </ul>
</body>
</html>