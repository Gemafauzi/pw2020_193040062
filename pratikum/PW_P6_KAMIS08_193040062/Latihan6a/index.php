<?php 

    require 'php/functions.php';

    $makanan= query("SELECT * FROM makanan")
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
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
      <!-- navbar -->
      <nav class="navbar navbar-light bg-primary">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
      <!-- akhir navbar -->

      <!-- tabel -->
      <section class="makanan">
    <div class="container" id="container">
      <div class="row pt-5">

        <?php foreach ($makanan as $m) : ?>

          <div class="col-sm-3 mb-3">
            <div class="card  mt-3">
              <img class="card-img-top" src="assets/img/<?= $m['foto'] ?>" alt="Card image cap" height="200" width="150">
              <div class="card-body">
                <h5 class="card-title"><?= $m["Nama"] ?></h5>
                <a href="php/detail.php?ID=<?= $m['ID'] ?>" class="btn btn-danger">Detail</a>
              </div>
            </div>
          </div>

        <?php endforeach ?>

      </div>
    </div>
  </section>

      <!-- akhir  -->


      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>