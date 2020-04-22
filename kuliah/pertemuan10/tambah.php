<?php

require 'functions.php';

if (isset($_POST['tambah'])) {
    if(tambah($_POST)> 0 ) {
        echo "<script>

            alert('data berhasil di tambahkan');
            document.location.herf = 'Latihan3.php';

                </script>";
    }else{
        echo"data gagal ditambahkan!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah DATA  Mahasiswa</title>
</head>
<body>
    <h3>Form Tambah Data Mahasiswa</h3>
    <from action="" method="POST">
    <ul>
        <li>
            <label>

            Nama :
            <input type="text" name="Nama" autofocus require>
              </label>
        </li>
           <li>
           <label>

            NRP :
            <input type="text" name="nrp">
            </label>
           </li>
           <li>
           <label>

            Email :
            <input type="text" name="email">
          </label>
           </li>

           <li>
           <label>

            Jurusan :
            <input type="text" name="jurusan">
            </label>
           </li>
           
           <li>
           <label>

            Gambar :
            <input type="text" name="gambar">
            </label>
           </li>
           <li>
           
                    <button type="submit" name="tambah">Tambah Data!</button>
           </li>
    </ul>
</body>
</html>