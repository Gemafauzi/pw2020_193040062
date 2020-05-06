<?php

require 'functions.php';



$id = $_GET['id'];

$m  = query("SELECT  * FROM  mahasiswa  WHERE ID= $id");




if (isset($_POST['ubah'])) {
    if(ubah($_POST) > 0 ) {
        echo "<script>

            alert('data berhasil di ubah!');
            document.location.href = 'index.php';

                </script>";
    }else{
        echo"data gagal diubah!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah  DATA  Mahasiswa</title>
</head>
<body>
    <h3>Form Ubah Data Mahasiswa</h3>
    <form action="" method="POST">
        <input type="hidden" name="ID" value="<?= $m['ID'];?>">
    <ul>
        <li>
            <label>

            Nama :
            <input type="text" name="Nama" autofocus required value="<?= $m['Nama'];?>">
              </label>
        </li>
           <li>
           <label>

            NRP :
            <input type="text" name="nrp" required  value="<?= $m['nrp'];?>">
            </label>
           </li>
           <li>
           <label>

            Email :
            <input type="text" name="email" required value="<?= $m['email'];?>">
          </label>
           </li>

           <li>
           <label>

            Jurusan :
            <input type="text" name="jurusan"required  value="<?= $m['jurusan'];?>">
            </label>
           </li>
           
           <li>
           <label>

            Gambar :
            <input type="text" name="gambar"required  value="<?= $m['gambar'];?>">
            </label>
           </li>
           <li>
           
                    <button type="submit" name="ubah">Ubah Data!</button>
           </li>
    </ul>
    </form>
</body>
</html>