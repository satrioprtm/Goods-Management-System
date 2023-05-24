<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$kd_pelanggan = $_GET['kd_pelanggan'];


// menghapus data dari database
mysqli_query($koneksi,"delete from pelanggan where kd_pelanggan='$kd_pelanggan'");

// mengalihkan halaman kembali ke index.php
header("location:pelanggan.php");

?>