<?php
	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
</head>
<body>
	<a href="logout_adm.php">logout</a>
	<p>
		Username anda : 
		<?php echo $_SESSION['username'];?>
	</p>
	<h1 align="center">ADMIN PANEL</h1>
	<h3 align="center">Daftar Pesanan</h3>
	<table align="center" border="1">
		<tr>
			<td>Nama</td>
			<td>No KTP</td>
			<td>No HP</td>
			<td>Alamat</td>
			<td>Durasi</td>
			<td>Barang</td>
			<td>Harga</td>
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
            <td> <?php echo $query['harga']; ?></td>
			<td> <a href="edit_data.php?id= <?php echo $query['id'] ?>"> Edit </a> 
				<a href="hapus_data.php?id= <?php echo $query['id'] ?>"> Hapus </a></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>