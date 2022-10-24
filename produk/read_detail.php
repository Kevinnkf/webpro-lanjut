<?php
    require "koneksi.php";
    if ($_GET["id"] != null) {
        $id = $_GET["id"];
        $script = "select * from baju where id = $id";
        $query = mysqli_query($conn, $script);
        $data = mysqli_fetch_array($query);
    }else {
        header("location: read.php");
    }

    if (isset($_POST['hapus'])) {
        $script2 = "DELETE FROM BAJU WHERE id = $id";
        $query2 = mysqli_query($conn, $script2);
        if($query2){
           header("location: read.php");    
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Produk</title>
</head>
<body>
<header>
        <div class="wrapper">
            <div class="row">
                <div class="col-0">
                </div>
                <div class="col-5">
                    <ul>
                        <font face="Sans-serif" color="black" size="4">
                            <ul></ul> <li> <a href="index.php"> Home</a></li>
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

    
</body>
</html>
