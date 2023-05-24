<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$kd_penjualan = $_GET['kd_penjualan'];


// menghapus data dari database
mysqli_query($koneksi,"delete from penjualan where kd_penjualan='$kd_penjualan'");

// mengalihkan halaman kembali ke index.php
header("location:penjualan.php");

?>