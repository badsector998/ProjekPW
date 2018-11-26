<?php
	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">ADMIN PAGE</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><p class="lead" style="margin-top: 10px; margin-right: 10px;">login sebagai :</p></li>
      <li><p class="lead" style="margin-top: 10px;"><?php echo $_SESSION['username'];?></p></li>
      <li><a href="logout_adm.php"><button class="btn btn-danger">Logout</button></a></li>
    </ul>
  </div>
</nav>

	<h1 class="display-4 text-center">ADMIN PANEL</h1>
	<h3 align="center">Daftar Pesanan</h3>
	<div class="container">
		<div class="well well-lg">
			<table class="table table-condensed" align="center" border="1">
				<tr>
					<th>Nama</th>
					<th>No KTP</th>
					<th>No HP</th>
					<th>Alamat</th>
					<th>Durasi</th>
					<th>Barang</th>
					<th>Harga</th>
		            <th>Aksi</th>
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
					<td> <?php echo $query['durasi']." hari"; ?></td>
					<td> <?php echo $query['barang']; ?></td>
		            <td> <?php echo $query['harga']; ?></td>
					<td> <a href="edit_data.php?id=<?php echo $query['id'] ?>"><button class="btn btn-warning">EDIT</button></a> 
						<a href="hapus_data.php?id=<?php echo $query['id'] ?>"><button class="btn btn-danger">HAPUS</button></a></td>
				</tr>
				<?php } ?>
			</table>		
		</div>		
	</div>
</body>
</html>