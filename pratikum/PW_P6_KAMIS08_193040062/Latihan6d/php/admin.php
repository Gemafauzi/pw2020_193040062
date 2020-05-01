<?php
require 'functions.php';

$makanan = query("SELECT * FROM makanan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
      table{
          margin:auto;
          text-align: center; 
         
      }
      td{
        padding: 20px;
      }
     
.add{
  box-shadow: 5px 5px #888888;
  border:none;
  padding: 15px;
  width: 95px;
  text-align: center;
  background-color: yellow;
  text-decoration: none;
  border-radius: 15px;
  height: 10px;
}.container{
  width: 1080px;
  margin: auto;
}
.add a{
  text-decoration: none;
  color: black;
}
  </style> 
</head>

<body>
<div class="container">
<div class="add">
        <a href="tambah.php">Tambah Data</a>
    </div>
    <br>
  <table  border="1" cellspading="5">
    <tr>
        <th>No</th>
        <th>Aksi</th>
      <th>Foto</th>
      <th>Nama</th>
      <th>Harga</th>
      <th>Jenis</th>
      <th>Asal</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($makanan as $m) : ?>


      <tr>
        <td><?= $i++ ?></td>
        <td>
          <a href="../hapus.php?ID=<?=$m['ID'];?>">Hapus</a>
          <a href="ubah.php?ID=<?=$m['ID'];?>">ubah</a>
        </td>
        <td><img src="../assets/img/<?= $m['foto']; ?>"style="width:300px"></td>
        <td><?= $m['Nama']; ?></td>
        <td><?= $m['Harga']; ?></td>
        <td><?= $m['Jenis']; ?></td>
        <td><?= $m['Asal']; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
  
</div>
</body>

</html>