<?php
//koneksi database
include 'koneksi.php';

//ambil data yg dikirim dari form 
$kd_pelanggan=$_POST['kd_pelanggan'];
$nama_pelanggan=$_POST['nama_pelanggan'];
$jk=$_POST['jk'];
$tgl_lahir=$_POST['tgl_lahir'];
$agama=$_POST['agama'];
$hp=$_POST['hp'];
$alamat=$_POST['alamat'];

mysqli_query($koneksi,"insert into pelanggan values('$kd_pelanggan','$nama_pelanggan','$jk','$tgl_lahir','$agama','$hp','$alamat')");
//alih halaman ke utama
header("location:pelanggan.php");

?>
