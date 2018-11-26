<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<link rel="stylesheet" type="text/css" href="btstp/css/bootstrap.min.css">
	<script type="text/javascript" src="btstp/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="btstp/js/jquery.min.js"></script>
</head>
<body>


<div class="container">
	<div class="jumbotron">
		<h1 class="display-1 border-bottom"> Cek pesanan</h1>
		<p class="lead">silahkan masukan nama penyewa.</p>
	</div>

	<form class="form-horizontal" method="get" action="cek_pesanan.php">
		<div class="row">
			<label class="control-label col-sm2" style="margin-top: 8px;">Nama : </label>
				<div class="form-group">
					<input class="form-control" type="text" name="nama" required="1" style="margin-left: 10px;"></input>
				</div>
			<input type="submit" class="btn btn-success" name="submit" style="margin-left: 20px;margin-bottom: 17px;"></input>
		</div>
	</form>

	<table class="table">
		<tr>
			<th>Nama</th>
			<th>Nomor KTP</th>
			<th>Nomor Telepon</th>
			<th>Alamat</th>
			<th>Durasi</th>
			<th>Barang</th>
			<th>Harga</th>
			<th>Aksi</th>
		</tr>

	<?php
		include'koneksi.php';
		if(isset($_GET['submit'])){
		$nama = $_GET['nama'];
		$sql = mysqli_query($koneksi,"select * from rental_ps where nama like '%$nama%' ") or die(mysql_error());
		while ($query = mysqli_fetch_array($sql)) {
		?>
			<tr>
				<td> <?php echo $query['nama']; ?></td>
				<td> <?php echo $query['no_ktp']; ?></td>
				<td> <?php echo $query['no_tlp']; ?></td>
				<td> <?php echo $query['alamat']; ?></td>
				<td> <?php echo $query['durasi']." hari"; ?></td>
				<td> <?php echo $query['barang']; ?></td>
				<td> <?php echo $query['harga']; ?></td>
				<td> <a class="btn btn-primary" href="ProjectPS.php"> OK </a> </td>
			</tr>
		<?php }
		} 
		?>

	</table>
</div>
</body>
</html>