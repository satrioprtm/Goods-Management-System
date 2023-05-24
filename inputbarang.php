<!DOCTYPE html>
<html>

<head>
	<title> Sistem Informasi Project 1</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://cdn.tailwindcss.com"></script>

<body>
	<div class="flex justify-between border-b-4 border-black p-5">
		<h1 class="text-3xl font-bold text-center"><span class="text-red-500">JAYA</span> ELEKTRONIK</h1>
		<div class="flex">
			<a class="text-blue-500 mx-2" href="index.html">Home </a>|
			<a class="text-blue-500 mx-2" href="pelanggan.php">Master Pelanggan </a>|
			<a class="text-blue-500 mx-2" href="barang.php">Master Barang </a>|
			<a class="text-blue-500 mx-2" href="penjualan.php">Transaksi Penjualan</a>
		</div>
	</div>
	</br>
	<div class="flex justify-center flex-col p-5">
		<h3 class="text-2xl font-bold mb-5">Tambah Barang</h3>
		<form method="post" action="prosestambahbarang.php">
			<table>
				<tr class="my-2">
					<td class="w-1/2">Kode Barang</td>
					<td><Input class="border border-gray-400 rounded px-2" type="text" name="kd_barang"></td>
				</tr>
				<tr class="my-2">
					<td class="w-1/2">Nama Barang</td>
					<td><Input class="border border-gray-400 rounded px-2" type="text" name="nama_barang"></td>
				</tr>
				<tr class="my-2">
					<td>Satuan</td>
					<td><Input class="border border-gray-400 rounded px-2" type="text" name="satuan"></td>
				</tr>
				<tr class="my-2">
					<td>Harga</td>
					<td><Input class="border border-gray-400 rounded px-2" type="text" name="harga"></td>
				</tr>
				<tr>
					<td></td>
					<td><Input type="submit" class="border border-gray-300 bg-gray-200 px-5 mt-5" value="Simpan"></td>
				</tr>
			</table>

		</form>
	</div>
</body>

</html>