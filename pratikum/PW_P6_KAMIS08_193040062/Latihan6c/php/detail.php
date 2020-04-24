<?php 

    if (!isset($_GET['ID'])){
        header("location: ../ index.php");
        exit;
    }

    require 'functions.php';

    $id = $_GET['ID'];

    $makanan = query("SELECT * FROM makanan WHERE ID = $id")[0];
?>

<html>
    <head>
        <title>Latihan6cDetail_193040062</title>
    </head>
    <body>
    <h1>makanan</h1>
        <div class="container">
            <div class="foto">
                <img src="../assets/img/<?= $makanan["foto"]; ?>"height="250px" alt="">
            </div>
                <div class="keterangan">
                    <p>Nama  :<?= $makanan["Nama"]; ?></p>
                    <p>Harga : <?= $makanan["Harga"]; ?></p>
                    <p>Jenis : <?= $makanan["Jenis"]; ?></p>
                    <p>Asal : <?= $makanan["Asal"]; ?></p>
                </div>

        <button class="tombol_kembali"><a href="../index.php">Kembali</a></button>
        </div>
    </body>
</html>