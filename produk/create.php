<?php
    require  "koneksi.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
                                    <input type="search" name="search" id="from1" placeholder="Mau cari apa?" class="form-control">
                                </div>
                                <input type="submit" value="Search" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="wrapper">
        <div style="color: red;">
            <?php
                if (isset($_POST['submit'])) {
                    if (isset($_FILES['foto'])) {
                        $judul = $_POST['judul'];
                        $harga = $_POST['harga'];
                        $asal = $_POST['asal'];
                        $deskripsi = $_POST['deskripsi'];
                        $nama = $_POST['nama'];
                        $telp = $_POST['telp'];
                        $file_tmp = $_FILES ['foto']['tmp_name'];
                        $type = pathinfo($file_tmp, PATHINFO_EXTENSION); 
                        $data = file_get_contents($file_tmp);
                        $foto = 'data:image/'.$type . ' ;base64' . base64_encode($data);
                        
                        $script = "INSERT INTO baju SET judul = '$judul', harga = $harga, asal= '$asal', deskripsi = '$deskripsi',
                        nama = '$nama' telp ='$telp' foto = '$foto'";
                        $query = mysqli_query($conn, $sql);
                        if ($query) {
                            header("location: read.php");
                            # code...
                        }else {
                            echo "gagal mengupload data";
                        }
                    }
                }
            ?>    
            <br>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for=""> Nama Produk </label>
                <input type="text" class="form-control" name="judul">
            </div>
            <div class="form-group">
                <label for=""> Foto Produk </label>
                <input type="file" class="form-control" name="judul">
            </div>
            <div class="form-group">
                <label for=""> Harga Produk </label>
                <input type="number" class="form-control" name="judul">
            </div>
            <div class="form-group">
                <label for=""> Asal Produk </label>
                <select name="asal" id="" class="form-control">
                    <option > Pilih </option>
                    <option value="Dalam Negeri"> Dalam Negeri</option>
                    <option value="Luar Negeri"> Luar Negeri</option>
                </select> 
            </div>
        </form>
    </div>
</body>
</html>