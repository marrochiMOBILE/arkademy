<?php 
@require_once 'conn.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arkademy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
    
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">arkademy</span>
  </div>
</nav>


    <div class="container mt-3">
    <div class="row">
     <div class="col-sm-6 card">
     <h2>tambah produk</h2>
     <hr>
            <form action="" method="post">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">nama produk</label>
            <input type="text" name="nama_produk" class="form-control" id="exampleFormControlInput1" >
            </div>
            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">keterangan</label>
            <textarea class="form-control"  name="keterangan" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">harga</label>
            <input type="number" name="harga" class="form-control" id="exampleFormControlInput1" >
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">jumlah</label>
            <input type="number" name="jumlah" class="form-control" id="exampleFormControlInput1" >
            </div>
            <button class="btn btn-dark">submit</button>
            <a href="index.php" class="btn btn-dark">cancel</a>
            </form>
            <div class="mt-5"></div>
     </div>
    </div>
    </div>


</body>
</html>

<?php

if($_POST){

    foreach ($_POST as $key => $value) {
        ${$key} = $value;
    }

    $sql = "INSERT INTO produk (nama_produk, keterangan, harga, jumlah)
VALUES ('$nama_produk', '$keterangan', '$harga', '$jumlah')";

if (mysqli_query($conn, $sql)) {
 header("location:index.php");
} else {
  echo ">>>>>>>>>>>>>> Gagal simpan";
}



}


?>