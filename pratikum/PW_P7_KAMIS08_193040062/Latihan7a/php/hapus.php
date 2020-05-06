<?php
require 'php/functions.php';
$id= $_GET ['ID'];
    if(hapus($id) > 0 ) {
        echo "<script>

            alert('data berhasil dihapus!');
            document.location.href = 'php/admin.php';

                </script>";
    }else{
        echo "<script>

            alert('data gagal dihapus!');
            document.location.href = 'php/admin.php';

                </script>";
    }


?>