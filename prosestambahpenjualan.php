
<?php
//koneksi database
include 'koneksi.php';

//ambil data yg dikirim dari form 
$kd_penjualan=$_POST['kd_penjualan'];
$tgl_penjualan=$_POST['tgl_penjualan'];
$kd_pelanggan=$_POST['kd_pelanggan'];
$kd_barang=$_POST['kd_barang'];
$qty=$_POST['qty'];

mysqli_query($koneksi,"insert into penjualan values('$kd_penjualan','$tgl_penjualan','$kd_pelanggan','$kd_barang','$qty')");
//alih halaman ke utama
header("location:penjualan.php");

?>
