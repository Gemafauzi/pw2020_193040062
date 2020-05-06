
<?php
session_start();  
if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';


if(isset($_GET['keyword'])){
  $keyword = $_GET['keyword'];
  $makanan = query("SELECT * FROM makanan WHERE
    foto LIKE '%$keyword%'OR
    Nama LIKE '%$keyword%'OR
    Harga LIKE '%$keyword%'OR
    Jenis LIKE '%$keyword%'OR
    Asal LIKE '%$keyword%'
  ");
}else{
  $makanan = query("SELECT * FROM makanan");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>
      body{
        background-color: teal;
      }
      .container{
      
        margin:auto;
      }
      .table-dark td{
        padding:20px;
      }
    </style>
  </head>
  <body>
  <div class="container">
    <br>
    <div class="add">
    <a href="tambah.php">
    <button type="button" class="btn btn-warning">Tambah Data</button>
    </a>  
    </div>
    <div class="logout">
      <a href="logout.php" class="btn-warning">Logout</a>
    </div>
      <br>
      <form action="" method="GET">
      <div class="input-group mb-3 w-100">
    <div class="input-group-prepend">
    </div>
    <input type="text" name ="keyword" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
    <button class="btn btn-warning" type="submit" name="cari">Cari!</button>
  </div>
      </form>
  
    
    <table class="table table-sm table-dark text-center">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Aksi</th>
        <th scope="col">Gambar</th>
        <th scope="col">Nama</th>
        <th scope="col">Harga</th>
        <th scope="col">Jenis</th>
        <th scope="col">Asal</th>
      </tr>
    </thead>
    <tbody>
    <?php if (empty($makanan)) : ?>
        <tr>
          <td colspan="7">
            <h1>Data tidak ditemukan</h1>
          </td>
        </tr>
  
       <?php else : ?>  
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
        <?php endif; ?>
    
    </tbody>
  </table>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>