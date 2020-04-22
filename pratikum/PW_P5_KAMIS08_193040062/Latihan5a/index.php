<?php 

    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");

    mysqli_select_db($conn, "tubes_193040062") or die("Database Salah!");

    $result = mysqli_query($conn, "SELECT*FROM makanan")
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
        <?php while($row = mysqli_fetch_assoc($result)) : ?> 
            <tr>
            <td><img src="assets/img/<?= $row["foto"]; ?>" height="350px"></td>
            <td><?= $row ["Nama"];?></td>
            <td><?= $row ["Harga"];?></td>
            <td><?= $row ["Jenis"];?></td>
            <td><?= $row ["Asal"];?></td>
            </tr>
        <?php endwhile; ?>
    </table>
    </center>
</body>
</html>