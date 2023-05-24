<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Project 1</title>
	<script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
<?php 
include 'koneksi.php';
$kd_pelanggan = $_GET['kd_pelanggan'];
$data = mysqli_query($koneksi,"select * from pelanggan where kd_pelanggan='$kd_pelanggan'");
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
<form method="post" action="update.php">
	<table>
		<tr class="pb-10">
			<td class="pr-10">Kode Pelanggan</td>
			<td>
				<input type="text" class="border border-black rounded px-2" name="kd_pelanggan" value="<?php echo $d['kd_pelanggan'];?>">
			</td>
		</tr>
		<tr class="pb-10">
			<td>Nama Pelanggan</td>
			<td><input type="text" class="border border-black rounded px-2" name="nama_pelanggan" value="<?php echo $d['nama_pelanggan'];?>"></td>
		</tr>
<tr class="pb-10">
			<td>Tanggal Lahir</td>
			<td><input type="text" class="border border-black rounded px-2" name="tgl_lahir" value="<?php echo $d['tgl_lahir'];?>"></td>
		</tr>
		<tr class="pb-10">
			<td>Agama</td>
			<td><input type="text" class="border border-black rounded px-2" name="agama" value="<?php echo $d['agama'];?>"></td>
		</tr>
		<tr class="pb-10">
			<td>Jenis Kelamin</td>
			<td><input type="text" class="border border-black rounded px-2" name="jk" value="<?php echo $d['jk'];?>"></td>
		</tr>
		<tr class="pb-10">
			<td>Hp</td>
			<td><input type="text" class="border border-black rounded px-2" name="hp" value="<?php echo $d['hp'];?>"></td>
		</tr>
		<tr class="pb-10">
			<td>Alamat</td>
			<td><input type="text" class="border border-black rounded px-2" name="alamat" value="<?php echo $d['alamat'];?>"></td>
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