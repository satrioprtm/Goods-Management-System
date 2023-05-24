<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Project 1</title>
	<script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
<?php 
include 'koneksi.php';
$kd_penjualan = $_GET['kd_penjualan'];
$data = mysqli_query($koneksi,"select * from penjualan JOIN barang ON penjualan.kd_barang=barang.kd_barang JOIN pelanggan ON penjualan.kd_pelanggan=pelanggan.kd_pelanggan where kd_penjualan='$kd_penjualan'");
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
<form method="post" action="updatepenjualan.php">
	<table>
		<tr class="pb-10">
			<td class="pr-10">Kode Penjualan</td>
			<td>
				<input type="text" class="border border-black rounded px-2" name="kd_penjualan" value="<?php echo $d['kd_penjualan'];?>">
			</td>
		</tr>
		<tr class="pb-10">
			<td>Tanggal</td>
			<td><input type="date" class="border border-black rounded px-2" name="tgl_penjualan" value="<?php echo $d['tgl_penjualan'];?>"></td>
		</tr>
<tr class="pb-10">
			<td>Kode Pelanggan</td>
			<td><input type="text" class="border border-black rounded px-2" name="kd_pelanggan" value="<?php echo $d['kd_pelanggan'];?>"></td>
		</tr>
		
		<tr class="pb-10">
			<td>Kode Barang</td>
			<td><input type="text" class="border border-black rounded px-2" name="kd_barang" value="<?php echo $d['kd_barang'];?>"></td>
		</tr>
		
		<tr class="pb-10">
			<td>Qty</td>
			<td><input type="text" class="border border-black rounded px-2" name="qty" value="<?php echo $d['qty'];?>"></td>
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