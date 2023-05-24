<?php
include 'koneksi.php';

// tangkap data yg dikirm dari form
$kd_penjualan=$_POST['kd_penjualan'];
$tgl_penjualan=$_POST['tgl_penjualan'];
$kd_pelanggan=$_POST['kd_pelanggan'];
// $nama_pelanggan=$_POST['nama_pelanggan'];
$kd_barang=$_POST['kd_barang'];
// $nama_barang=$_POST['nama_barang'];
// $harga=$_POST['harga'];
$qty=$_POST['qty'];
// $jumlah=$_POST['jumlah'];


//update data ke database 

mysqli_query($koneksi,"update penjualan set kd_penjualan='$kd_penjualan',tgl_penjualan='$tgl_penjualan',kd_pelanggan='$kd_pelanggan',kd_barang='$kd_barang',qty='$qty' where kd_penjualan='$kd_penjualan'");

//kembali ke index.php

header ("location:penjualan.php");

?>
