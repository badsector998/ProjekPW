<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
</head>
<body>
	<h1 align="center">Daftar Pesanan</h1>
	<table align="center" border="1">
		<tr>
			<td>Nama</td>
			<td>No KTP</td>
			<td>No HP</td>
			<td>Alamat</td>
			<td>Durasi</td>
			<td>Barang</td>
			<td>Aksi</td>
		</tr>
		<?php
		include'koneksi.php';

		$sql = mysqli_query($koneksi,"select * from rental_ps") or die(mysql_error());
		while ($query = mysqli_fetch_array($sql)) {
		?>
		<tr>
			<td> <?php echo $query['nama']; ?></td>
			<td> <?php echo $query['no_ktp']; ?></td>
			<td> <?php echo $query['no_tlp']; ?></td>
			<td> <?php echo $query['alamat']; ?></td>
			<td> <?php echo $query['durasi']; ?></td>
			<td> <?php echo $query['barang']; ?></td>
			<td> <a href="edit_data.php?id= <?php echo $query['id'] ?>"> update </a> </td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>