<?php
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040062") or die("Database salah!");

    return $conn;
}

function query($sql){
    $conn = koneksi();
    $result = mysqli_query($conn , $sql);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
    
}
function upload(){
  $nama_file = $_FILES['foto']['name'];
  $tipe_file = $_FILES['foto']['type'];
  $ukuran_file = $_FILES['foto']['size'];
  $error = $_FILES['foto']['error'];
  $tmp_file = $_FILES['foto']['tmp_name'];
  


  if($error == 4){
    //   echo "<script>
    //             alert('Pilih foto terlebih dahulu!');
    //             </script>";
                return 'sate.jpg';
  }


  $daftar_foto = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower (end($ekstensi_file));
  if(!in_array($ekstensi_file, $daftar_foto)) {
        echo "<script>
                  alert('yang anda Pilih bukan foto!');
                  </script>";
                  return false;
  }

  if($tipe_file != 'image/jpeg' &&  $tipe_file != 'image/png'){
    echo "<script>
    alert('yang anda Pilih bukan foto!');
    </script>";
    return false;
  }
  if($ukuran_file > 5000000){
    echo "<script>
    alert('Ukuran anda terlalu besar!');
    </script>";
    return false;
  }
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

  return $nama_file_baru;
}


function tambah($data)
{
    $conn   = koneksi();
    
    // $foto    = htmlspecialchars($data['foto']);
    $nama     = htmlspecialchars($data['Nama']);
    $harga   = htmlspecialchars($data['Harga']);
    $asal =htmlspecialchars($data['Asal']);
    $jenis  =htmlspecialchars($data['Jenis']);

    $foto = upload();
    if (!$foto){
        return false;
    }


    $query  = "INSERT INTO
               makanan
                VALUES
                (null, '$foto', '$nama', '$harga', '$asal', '$jenis')
                ";
    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}
function hapus($id)
{
    $conn   = koneksi();


    mysqli_query($conn,"DELETE FROM
               makanan WHERE ID=$id
                ");
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn   = koneksi();
    $id     = $data['ID'];
    // $foto    = htmlspecialchars($data['foto']);
    $nama     = htmlspecialchars($data['Nama']);
    $harga   = htmlspecialchars($data['Harga']);
    $asal =htmlspecialchars($data['Asal']);
    $jenis  =htmlspecialchars($data['Jenis']);
    $foto_lama = htmlspecialchars($data['foto_lama']);

    $foto = upload();
    if(!$foto) {
        return false;
    }
    if ($foto == 'sate.jpg') {
        $foto = $foto_lama;
    }


    $query  = "UPDATE
               makanan
                SET
                 foto = '$foto',
                Nama ='$nama',
                 Harga ='$harga',
                Asal = '$asal', 
                Jenis = '$jenis'
                WHERE ID = '$id'
                "; 
                
    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}
function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // Cek Username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = 'username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                    alert('Username sudah digunakan');
                </script>";
        return false;
    }

    // Enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}

?>