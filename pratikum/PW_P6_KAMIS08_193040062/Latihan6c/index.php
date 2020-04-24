<?php 

    require 'php/functions.php';

    $makanan= query("SELECT * FROM makanan")
?>

<html>
    <head>
        <title>Latihan5c_193040062</title>
        <link rel="stylesheet" href="css/styleCindex.css" type="text/css">
    </head>
    
    <body background="assets/img/bckgrd.png">
                <h1>makanan</h1>
                <div class="container">
                    <?php foreach ($makanan as $m) : ?>
                        <P class="Nama">
                            <a href="php/detail.php?ID=<?= $m['ID'] ?>">
                            <?= $m["Nama"] ?>
                            </a>
                        </P>
                    <?php endforeach; ?>
                </div>
    </body>
</html>