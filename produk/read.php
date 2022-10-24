<?php

    require "koneksi.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="file.css">
    <title>produk</title>
</head>
<body background="">
    <header>
        <div class="wrapper">
            <div class="row">
                <div class="col-0">
                </div>
                <div class="col-5">
                    <ul>
                        <font face="Sans-serif" color="black" size="4">
                            <ul></ul> <l    i> <a href="index.php"> Home</a></li>
                            <li><a href="read.php"> Produk </a></li>
                            <li><a href="create.php"> Jual Barang </a></li>
                        </font>
                    </ul>
                    <div class="col-4">
                        <form method="get">
                            <div class="input-group">
                                <div class="form-outline">
                                    <input type="search" name="search" id="from1" placeholder="mau cari apa?" class="form-control">
                                </div>
                                <input type="submit" value="Search" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
 <br>
 <ul> <a href="create.php" type="submit" class="btn btn-primary">[+] Tambahkan Produk </a> </ul>

 <div class="wrapper">
    <div class="row">
        <?php 
            $batas = 8;
            $halaman = @$_GET['halaman'];
            if (empty($halaman)) {
                $posisi = 0;
                $halaman = 1;

            }
            else {
                $posisi = ($halaman-1) * $batas;
            }
            if (isset($_GET['search'])) {
                $search = $_GET['search'];
                $sql = "select * from baju WHERE judul LIKE '%$search%' order by id Desc limit $posisi, $batas";
            }else {
                $sql = "select * from baju order by id Desc limit $posisi, $batas";
            }
            $hasil = mysqli_query($conn, $sql);
            while($data = mysqli_fetch_array($hasil){
            
        ?>
    </div>
 </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="" crossorigin="anonymous"></script>

</body> 
</html>