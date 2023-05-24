<!DOCTYPE html>
<html>

<head>
	<title> Transaksi</title>
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
		<h1 class="text-3xl font-bold text-center"><span class="text-gray-500">Satrio </span> Pratama Store</h1>
		<div class="flex">
			<a class="text-blue-500 mx-2" href="index.html">Home </a>|
			<a class="text-blue-500 mx-2" href="pelanggan.php">Pelanggan </a>|
			<a class="text-blue-500 mx-2" href="barang.php">Barang </a>|
			<a class="text-blue-500 mx-2" href="penjualan.php">Transaksi</a>
		</div>
	</div>
	<div class="p-5">
		<a class="tombol mb-5" href="inputpenjualan.php"> + Tambah Penjualan</a>
		<table border="5" class="text-center mt-5">
			<tr class="border border-black">
				<th class="border border-black px-4">Kode Penjualan</th>
				<th class="border border-black px-4">Tanggal</th>
				<th class="border border-black px-4">Kode Pelanggan</th>
				<th class="border border-black px-4">Kode Barang</th>
				<th class="border border-black px-4">Nama Barang</th>
				<th class="border border-black px-4">Harga</th>
				<th class="border border-black px-4">Qty</th>
				<th class="border border-black px-4">Jumlah</th>
				<th class="border border-black px-4">Aksi</th>
			</tr>
			<?php
    include 'koneksi.php';
    $nomor=1;
    $data = mysqli_query($koneksi,"select * from penjualan JOIN barang ON penjualan.kd_barang=barang.kd_barang JOIN pelanggan ON penjualan.kd_pelanggan=pelanggan.kd_pelanggan;");
		while($d = mysqli_fetch_array($data)){
	?>
			<tr>
				<td class="border border-black"><?php echo $d ['kd_penjualan']; ?></td>
				<td class="border border-black"><?php echo $d ['tgl_penjualan']; ?> </td>
				<td class="border border-black"><?php echo $d ['kd_pelanggan']; ?></td>
				<td class="border border-black"><?php echo $d ['kd_barang']; ?></td>
				<td class="border border-black"><?php echo $d ['nama_barang']; ?></td>
				<td class="border border-black"><?php echo $d ['harga']; ?></td>
				<td class="border border-black"><?php echo $d ['qty']; ?></td>
				<td class="border border-black"><?php echo $d ['qty'] * $d ['harga']; ?></td>
				<td class="border border-black">
					<a href="editpenjualan.php?kd_penjualan=<?php echo $d['kd_penjualan']; ?>">Edit</a> |
					<a href="hapuspenjualan.php?kd_penjualan=<?php echo $d['kd_penjualan']; ?>">Hapus</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</body>

</html>