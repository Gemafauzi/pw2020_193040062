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

<html>
    <head>
        <title>Tugas_193040062</title>
        <link rel="stylesheet" href="css/styleCindex.css" type="text/css">
    </head>
    
    <body background="assets/img/bckgrd.png">
    <form action="" method="GET">
      <div class="input-group mb-3 w-100">
    <div class="input-group-prepend">
    </div>
    <input type="text" name ="keyword" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
    <button class="btn btn-warning" type="submit" name="cari">Cari!</button>
  </div>
      </form>
      <?php if (empty($makanan)) : ?>
        <tr>
          <td colspan="7">
            <h1>Data tidak ditemukan</h1>
          </td>
        </tr>
  
       <?php else : ?>  
                <h1>makanan</h1>
                <div class="container">
                    <?php foreach ($makanan as $m) : ?>
                        <P class="Nama">
                            <a href="php/detail.php?ID=<?= $m['ID'] ?>">
                            <?= $m["Nama"] ?>
                            </a>
                        </P>
                    <?php endforeach; ?>
                    <?php endif ; ?>
                </div>
                <a href="">
                <button type="">
                       Masuk ke halaman Admin     
                    </button>
                </a>
    </body>
</html>