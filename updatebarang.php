<?php
include 'koneksi.php';

// tangkap data yg dikirm dari form
$kd_barang=$_POST['kd_barang'];
$nama_barang=$_POST['nama_barang'];
$satuan=$_POST['satuan'];
$harga=$_POST['harga'];

// var_dump($kd_barang);
// var_dump($nama_barang);
//update data ke database 

mysqli_query($koneksi,"update barang set kd_barang='$kd_barang',nama_barang='$nama_barang',satuan='$satuan',harga='$harga' where kd_barang='$kd_barang'");

//kembali ke index.php

header ("location:barang.php");

?>