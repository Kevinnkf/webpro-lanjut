<?php
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'produk';
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if(!$conn){
        die("gagal konek dengan mySQL".mysqli_connect_error());
    }
?>