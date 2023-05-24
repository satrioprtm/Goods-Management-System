<!DOCTYPE html>
<html>

<head>
	<title> barang</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

	<?php
if (isset($_GET['pesan'])){
	$pesan = $_GET['pesan'];
	if($pesan == "input"){
	echo "data sudah berhasil diinput";
	}
		else if($pesan =="update"){
		echo "data sudah berhasil diupdate";
	} else if ($pesan == "hapus"){
	echo "data sudah di hapus";
}
	}

?>
	</br>
	<div class="flex justify-between border-b-4 border-black p-5">
		<h1 class="text-3xl font-bold text-center"><span class="text-gray-500">Satrio  </span> Pratama Store</h1>
		<div class="flex">
			<a class="text-blue-500 mx-2" href="index.html">Home </a>|
			<a class="text-blue-500 mx-2" href="pelanggan.php">Pelanggan </a>|
			<a class="text-blue-500 mx-2" href="barang.php">Barang </a>|
			<a class="text-blue-500 mx-2" href="penjualan.php">Transaksi</a>
		</div>
	</div>
	<div class="p-5">
		<a class="tombol mb-5" href="inputbarang.php"> + Tambah Barang</a>
		<table border="5" class="text-center mt-5">
			<tr class="border border-black">
				<th class="border border-black px-4">Kode Barang</th>
				<th class="border border-black px-4">Nama Barang</th>
				<th class="border border-black px-4">Satuan</th>
				<th class="border border-black px-4">Harga</th>
				<th class="border border-black px-4">Aksi</th>
			</tr>
			<?php
    include 'koneksi.php';
    $nomor=1;
    $data = mysqli_query($koneksi,"select * from barang");
		while($d = mysqli_fetch_array($data)){
	?>
			<tr>
				<td class="border border-black"><?php echo $d ['kd_barang']; ?></td>
				<td class="border border-black"><?php echo $d ['nama_barang']; ?> </td>
				<td class="border border-black"><?php echo $d ['satuan']; ?></td>
				<td class="border border-black"><?php echo $d ['harga']; ?></td>
				<td class="border border-black">
					<a href="editbarang.php?kd_barang=<?php echo $d['kd_barang']; ?>">Edit</a> |
					<a href="hapusbarang.php?kd_barang=<?php echo $d['kd_barang']; ?>">Hapus</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</body>

</html>