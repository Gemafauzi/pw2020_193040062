<?php
require 'php/functions.php';


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

    <title>Jual Beli Makanan</title>

    <style>
     .footer{
       width :auto;
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
  <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
  <a class="navbar-brand" href="container">Kuliner Gema</a>
    <div class="container bg-warning">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="php/login.php">Login</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Detail
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php foreach ($makanan as $m): ?>
          <a class="dropdown-item" href="php/detail.php?ID=<?=$m['ID']?>"><?=$m['Nama']?></a>
          <?php endforeach;?>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"></a>
      </li>
    </ul>
  </div>
</nav>

  <div id="carouselExampleControls" class="carousel carousel-lg slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="assets/img/1.png" alt="First slide" width="auto" height="600px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/2.jpg" alt="Second slide"width="auto" height="600px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/3.jpg" alt="Third slide"width="auto" height="600px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  
  
    
    <table class="table table-responsive-sm table-dark text-center mb-0">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Gambar Makanan</th>
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
          <td><img src="assets/img/<?= $m['foto']; ?>"style="width:300px"></td>
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


  <footer class="footer py-5 bg-warning pl-4">
  <div class="row">   
    <div class="col-12 col-md bg-warning">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
      <small class="d-block mb-3 text-muted">&copy; 2017-2020</small>
    </div>
    <div class="col-6 col-md">
      <h5>Manager</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Rifki Gema f</a></li>
    </div>
    <div class="col-6 col-md">
      <h5>Alamat</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="https://goo.gl/maps/UBMwUkBa4NnZZdjv9">KP.PARIGILAME 003/013 CIWARUGA KEC.PARONGPONG.</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Contact</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">WA:081220686342</a></li>
        <li><a class="text-muted" href="https:/instagram.com/bngkigem">Instagram <img src="assets/img/ig.jpg" width="20px"></a></li>
      </ul>
    </div>
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>