<?php
function koneksi()
{
    return  mysqli_connect('localhost', 'root', '', 'pw_193040062');
}

function query($query)  
{
    $conn = koneksi();
    
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result)== 1){
        return mysqli_fetch_assoc($result);
    }


    $rows   =   [];
    while ($row = mysqli_fetch_assoc($result)) {
     $rows[] =   $row;
    }

    return $rows;
}

function tambah($data)
{
    $conn   = koneksi();
    
    $nama    = htmlspecialchars($data['Nama']);
    $nrp     = htmlspecialchars($data['nrp']);
    $email   = htmlspecialchars($data['email']);
    $jurusan =htmlspecialchars($data['jurusan']);
    $gambar  =htmlspecialchars($data['gambar']);


    $query  = "INSERT INTO
                mahasiswa
                VALUES
                (null, '$nama','$nrp','$email','$jurusan','$gambar');
                ";
    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function hapus($id) {
    $conn  = koneksi();
    mysqli_query($conn, "DELETE FROM  mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn   = koneksi();
    
    $id       = $data['ID'];
    $nama    = htmlspecialchars($data['Nama']);
    $nrp     = htmlspecialchars($data['nrp']);
    $email   = htmlspecialchars($data['email']);
    $jurusan =htmlspecialchars($data['jurusan']);
    $gambar  =htmlspecialchars($data['gambar']);


    $query  =  "UPDATE mahasiswa SET
                nama = '$nama',
                nrp =  '$nrp',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
                WHERE ID = $id";
                
    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}
function login($data){
    $conn = koneksi();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);


    if($username == 'admin' && $password == '12345') {
    


        header("Location: index.php");
        exit;
}else {
     return [
        'error' => true,
        'pesan' => 'Username / Password Salah!'
     ];
    }
}    

?>