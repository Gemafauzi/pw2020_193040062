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
function tambah($data)
{
    $conn   = koneksi();
    
    $foto    = htmlspecialchars($data['foto']);
    $nama     = htmlspecialchars($data['Nama']);
    $harga   = htmlspecialchars($data['Harga']);
    $asal =htmlspecialchars($data['Asal']);
    $jenis  =htmlspecialchars($data['Jenis']);


    $query  = "INSERT INTO
               makanan
                VALUES
                (null, '$foto', '$nama', '$harga', '$asal', '$jenis');
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
    $foto    = htmlspecialchars($data['foto']);
    $nama     = htmlspecialchars($data['Nama']);
    $harga   = htmlspecialchars($data['Harga']);
    $asal =htmlspecialchars($data['Asal']);
    $jenis  =htmlspecialchars($data['Jenis']);


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