<?php
include 'koneksi.php';

// tangkap data yg dikirm dari form
$kd_pelanggan=$_POST['kd_pelanggan'];
$nama_pelanggan=$_POST['nama_pelanggan'];
$jk=$_POST['jk'];
$tgl_lahir=$_POST['tgl_lahir'];
$agama=$_POST['agama'];
$hp=$_POST['hp'];
$alamat=$_POST['alamat'];

//update data ke database 

mysqli_query($koneksi,"update pelanggan set kd_pelanggan='$kd_pelanggan', nama_pelanggan='$nama_pelanggan', jk='$jk', agama='$agama', hp='$hp', tgl_lahir='$tgl_lahir', alamat='$alamat' where kd_pelanggan='$kd_pelanggan'");

//kembali ke index.php

header ("location:pelanggan.php");

?>