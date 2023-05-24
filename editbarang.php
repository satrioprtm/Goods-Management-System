<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Project 1</title>
	<script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
<?php 
include 'koneksi.php';
$kd_barang = $_GET['kd_barang'];
$data = mysqli_query($koneksi,"select * from barang where kd_barang='$kd_barang'");
while($d = mysqli_fetch_array($data)){
 ?>
 <div class="flex justify-between border-b-4 border-black p-5">
		<h1 class="text-3xl font-bold text-center"><span class="text-red-500">JAYA</span> ELEKTRONIK</h1>
		<div class="flex">
			<a class="text-blue-500 mx-2" href="index.html">Home </a>|
			<a class="text-blue-500 mx-2" href="pelanggan.php">Master Pelanggan </a>|
			<a class="text-blue-500 mx-2" href="barang.php">Master Barang </a>|
			<a class="text-blue-500 mx-2" href="penjualan.php">Transaksi Penjualan</a>
		</div>
	</div>
	
	<div class="p-5">
<form method="post" action="updatebarang.php">
	<table>
		<tr class="pb-10">
			<td class="pr-10">Kode Barang</td>
			<td>
				<input type="text" class="border border-black rounded px-2" name="kd_barang" value="<?php echo $d['kd_barang'];?>">
			</td>
		</tr>
		<tr class="pb-10">
			<td>Nama Barang</td>
			<td><input type="text" class="border border-black rounded px-2" name="nama_barang" value="<?php echo $d['nama_barang'];?>"></td>
		</tr>
<tr class="pb-10">
			<td>Satuan</td>
			<td><input type="text" class="border border-black rounded px-2" name="satuan" value="<?php echo $d['satuan'];?>"></td>
		</tr>
		<tr class="pb-10">
			<td>Harga</td>
			<td><input type="text" class="border border-black rounded px-2" name="harga" value="<?php echo $d['harga'];?>"></td>
		</tr>
		<tr class="pb-10">
			<td></td>
			<td><input class="border border-gray-200 px-5 mt-3 bg-gray-300 rounded" type="submit" value="Simpan"></td>
		</tr>
	</table>
</form>
<?php

}
?>
</div>
</body>
</html>