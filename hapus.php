<?php 
@require_once 'conn.php';
$nama_produk = $_GET['id'];
// echo $nama_produk;
$sql = "DELETE FROM `produk` WHERE `produk`.`nama_produk` = '$nama_produk' ";

if (mysqli_query($conn, $sql)) {
  header("location:index.php");
} else {
  echo ">>>>>>>>>>>gagal simpan <hr> <a href='index.php'>kembali</a> ";
}

?>