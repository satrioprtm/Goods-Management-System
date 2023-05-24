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
		<h3 class="text-2xl font-bold mb-5">Tambah Penjualan</h3>
		<form method="post" action="prosestambahpenjualan.php">
			<table>
			<tr class="pb-10">
			<td class="pr-10">Kode Penjualan</td>
			<td>
				<input type="text" class="border border-black rounded px-2" name="kd_penjualan" value="">
			</td>
		</tr>
		<tr class="pb-10">
			<td>Tanggal</td>
			<td><input type="date" class="border border-black rounded px-2" name="tgl_penjualan" value=""></td>
		</tr>
<tr class="pb-10">
			<td>Kode Pelanggan</td>
			<td><input type="text" class="border border-black rounded px-2" name="kd_pelanggan" value=""></td>
		</tr>
		<tr class="pb-10">
			<td>Kode Barang</td>
			<td><input type="text" class="border border-black rounded px-2" name="kd_barang" value=""></td>
		</tr>
		<tr class="pb-10">
			<td>Qty</td>
			<td><input type="text" class="border border-black rounded px-2" name="qty" value=""></td>
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