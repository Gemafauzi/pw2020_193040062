<?php

$MakananDaerah =  [
    [
    "foto"  => "1.png",
    "Nama"  => "Nasi Padang",
    "Harga" =>  "Rp.12.000",
    "Jenis" =>  "Pokok",
    "Asal"  =>  "Padang"
    ],
    [
    "foto"  => "2.jpg",
    "Nama"  => "Karedok",
    "Harga" =>  "Rp.15.000",
    "Jenis" =>  "Pokok",
    "Asal"  =>  "Bandung"
    ],
    [
    "foto"  => "3.jpg",
    "Nama"  => "Papeda",
    "Harga" =>  "Rp.20.000",
    "Jenis" =>  "Pokok",
    "Asal"  =>  "Papua"
    ],
    [
    "foto"  => "4.jpg",
    "Nama"  => "Dodol",
    "Harga" =>  "Rp.30.000",
    "Jenis" =>  "Cemilan",
    "Asal"  =>  "Garut"
    ],
    [
    "foto"  => "5.jpg",
    "Nama"  => "empek-empek",
    "Harga" =>  "Rp.45.000",
    "Jenis" =>  "Pokok",
    "Asal"  =>  "Palembang"
    ],
    [
    "foto"  => "6.jpg",
    "Nama"  => "Baso Malang",
    "Harga" =>  "Rp.15.000",
    "Jenis" =>  "pokok",
    "Asal"  =>  "Malang"
    ],
    [
    "foto"  => "7.jpg",
    "Nama"  => "Rendang",
    "Harga" =>  "Rp.30.000",
    "Jenis" =>  "pokok",
    "Asal"  =>  "Sumatra Barat"
    ],
    [    
    "foto"  => "10.jpg",
    "Nama"  => "Gado-gado",
    "Harga" =>  "Rp.23.000",
    "Jenis" =>  "pokok",
    "Asal"  =>  "Jawa Barat","DKI Jakarta"
    ],
    [
    "foto"  => "8.jpg",
    "Nama"  => "Sate Madura",
    "Harga" =>  "Rp.12.000",
    "Jenis" =>  "Pokok",
    "Asal"  =>  "Madura",
    ],
    [
    "foto"  => "9.jpg",
    "Nama"  => "Mi aceh",
    "Harga" =>  "Rp.20.000",
    "Jenis" =>  "Pokok",
    "Asal"  =>  "aceh"
    ]
];
 ?>

<!DOCTYPE html>
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <td>Foto</td>
            <td>Nama</td>
            <td>Harga</td>
            <td>Jenis</td>
            <td>Asal</td>
        </tr>
        <?php foreach($MakananDaerah as $MakanCuy) { ?>
            <tr>
            <td><img src="img/<?= $MakanCuy["foto"]; ?>" height="450px" ></td>
            <td><?php echo $MakanCuy["Nama"];?></td>
            <td><?php echo $MakanCuy["Harga"];?></td>
            <td><?php echo $MakanCuy["Jenis"];?></td>
            <td><?php echo $MakanCuy["Asal"];?></td>
            </tr>
         <?php } ?>
    </table>
</body>
</html>