<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
  }
require 'functions.php';

if (isset($_POST['tambah'])) {
    if(tambah($_POST) > 0 ) {
        echo "<script>

            alert('data berhasil di tambahkan!');
            document.location.href = 'admin.php';

                </script>";
    }else{
        echo "<script>

            alert('data gagal di tambahkan!');
            document.location.href = 'admin.php';

                </script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makanan</title>
</head>
<body>
    <h3>Form Tambah Data Makanan</h3>
    <form action="" method="POST">
    <ul>
        <li>
            <label>

            Foto :</label><br>
            <input type="text" name="foto" autofocus required><br>
              
        </li>
           <li>
           <label>

            Nama :</label><br>
            <input type="text" name="Nama" required><br><br>
            
           </li>
           <li>
           <label>

            Harga :</label><br>
            <input type="text" name="Harga" required><br><br>
          
           </li>

           <li>
           <label>

           Asal : </label><br>
            <input type="text" name="Asal"required><br><br>
           
           </li>
           
           <li>
           <label>

            Jenis :
            </label><br>
           <select name="Jenis" id="Jenis">
            <option value="">------------Pilih Asal------------</option>
            <option value="Pokok">Pokok</option>
            <option value="Makanan Ringan">Makanan Ringan</option>
            <option value="Makanan Berat">Makanan Berat</option>
           </select><br><br>
          
           </li>
           
           
                    <button type="submit" name="tambah">Tambah Data!</button>
                    <button type="submit" name="tambah"><a href="../index.php">Kembali!</a></button>
    </ul>
    </form>
</body>
</html>
</body>
</html>