<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$kd_barang = $_GET['kd_barang'];


// menghapus data dari database
mysqli_query($koneksi,"delete from barang where kd_barang='$kd_barang'");

// mengalihkan halaman kembali ke index.php
header("location:barang.php");

?>