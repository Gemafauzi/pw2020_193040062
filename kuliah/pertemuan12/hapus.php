<?php
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];


if(hapus($id) > 0 ) {
    echo "<script>

        alert('data berhasil di hapus');
        document.location.href = 'index.php';

            </script>";
}else{
    echo"data gagal ditambahkan!";
}

























?>