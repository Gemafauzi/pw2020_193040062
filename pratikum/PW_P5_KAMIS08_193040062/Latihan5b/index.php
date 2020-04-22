<?php 

    
require 'php/functions.php';

$makanan = query("SELECT*FROM  makanan")
?>

<html>  
<head>
    <title>Latihan5a_193040062</title>
    <style>
        h1{
            text-align:center;
        }
    </style>
</head>
<body>
<h1>makanan</h1>
<center>
<table border="1px">
        <tr>
            <td>Foto</td>
            <td>Nama</td>
            <td>Harga</td>
            <td>Jenis</td>
            <td>Asal</td>
        </tr>
            <?php foreach($makanan as $m) : ?>
            <tr>
            <td><img src="assets/img/<?= $m["foto"]; ?>" height="250px"></td>
            <td><?= $m ["Nama"];?></td>
            <td><?= $m ["Harga"];?></td>
            <td><?= $m ["Jenis"];?></td>
            <td><?= $m ["Asal"];?></td>
            </tr>
            <?php endforeach; ?>
    </table>
    </center>
</body>
</html>