<?php
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
  }
require 'functions.php';

$id =   $_GET['ID'];
$m   = query("SELECT * FROM makanan WHERE ID = $id")[0];


if (isset($_POST['ubah'])) {
    if(ubah($_POST) > 0 ) {
        echo "<script>

            alert('data berhasil di ubah!');
            document.location.href = 'admin.php';

                </script>";
    }else{
        echo "<script>

            alert('data gagal di ubah!');
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
    <h3>Form Ubah Data Makanan</h3>
    <form action="" method="POST">
        <input type="hidden" name="ID" id="ID" value="<?= $m['ID']; ?>">
    <ul>
        <li>
            <label>

            Foto :</label><br>
            <input type="text" name="foto" autofocus required value="<?= $m['foto']; ?>"><br>
              
        </li>
           <li>
           <label>

            Nama :</label><br>
            <input type="text" name="Nama" required value="<?= $m['Nama']; ?>"><br>
            
           </li>
           <li>
           <label>

            Harga :</label><br>
            <input type="text" name="Harga" required value="<?= $m['Harga']; ?>"><br>
          
           </li>

           <li>
           <label>

           Asal : </label><br>
            <input type="text" name="Asal"required value="<?= $m['Asal']; ?>"><br><br>
           
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
           
           
                    <button type="submit" name="ubah">Ubah Data!</button>
    </ul>
    </form>
</body>
</html>
</body>
</html>