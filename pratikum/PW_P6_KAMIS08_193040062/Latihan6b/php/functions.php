<?php
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040062") or die("Database salah!");

    return $conn;
}

function query($sql){
    $conn = koneksi();
    $result = mysqli_query($conn , "$sql");

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
    $nama     = htmlspecialchars($data['nama']);
    $harga   = htmlspecialchars($data['harga']);
    $asal =htmlspecialchars($data['asal']);
    $jenis  =htmlspecialchars($data['jenis']);


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

?>