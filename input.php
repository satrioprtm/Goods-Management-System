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
			<a class="text-blue-500 mx-2" href="">Home </a>|
			<a class="text-blue-500 mx-2" href="">Master Pelanggan </a>|
			<a class="text-blue-500 mx-2" href="">Master Barang </a>|
			<a class="text-blue-500 mx-2" href="">Transaksi Penjualan</a>
		</div>
	</div>
	</br>
	<div class="flex justify-center flex-col p-5">
		<h3 class="text-2xl font-bold mb-5">Tambah Pelanggan</h3>
		<form method="post" action="prosestambah.php">
			<table>
				<tr class="my-2">
					<td class="w-1/2">Kode Pelanggan</td>
					<td><Input class="border border-gray-400 rounded px-2" type="text" name="kd_pelanggan"></td>
				</tr>
				<tr class="my-2">
					<td class="w-1/2">Nama Pelanggan</td>
					<td><Input class="border border-gray-400 rounded px-2" type="text" name="nama_pelanggan"></td>
				</tr>
				<tr class="my-2">
					<td>Jenis Kelamin</td>
					<td><Input class="border border-gray-400 rounded px-2" type="text" name="jk"></td>
				</tr>
				<tr class="my-2">
					<td>Tanggal Lahir</td>
					<td><Input class="border border-gray-400 rounded px-2" type="date" name="tgl_lahir"></td>
				</tr>
				<tr class="my-2">
					<td>Agama</td>
					<td><Input class="border border-gray-400 rounded px-2" type="text" name="agama"></td>
				</tr>
				<tr class="my-2">
					<td>Nomor Hp</td>
					<td><Input class="border border-gray-400 rounded px-2" type="text" name="hp"></td>
				</tr>
				<tr class="my-2">
					<td>Alamat</td>
					<td><Input class="border border-gray-400 rounded px-2" type="text" name="alamat"></td>
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