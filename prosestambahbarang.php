<?php
//koneksi database
include 'koneksi.php';

//ambil data yg dikirim dari form 
$kd_barang=$_POST['kd_barang'];
$nama_barang=$_POST['nama_barang'];
$satuan=$_POST['satuan'];
$harga=$_POST['harga'];

mysqli_query($koneksi,"insert into barang values('$kd_barang','$nama_barang','$satuan','$harga')");
//alih halaman ke utama
header("location:barang.php");

?>