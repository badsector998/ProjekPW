<!DOCTYPE html>
<html>
<head>
	<title>Rental PS</title>
	<link rel="stylesheet" type="text/css" href="btstp/css/bootstrap.min.css">
	<script type="text/javascript" src="btstp/js/bootstrap.min.js"></script>
</head>
<?php
	include "koneksi.php";

	$id = $_GET['id'];

	$query = mysqli_query($koneksi,"select *from rental_ps where id= '$id'") or die(mysqli_error());

	$data = mysqli_fetch_array($query) or die(mysqli_error());
?>
<body>
	<div class="container">
		<div class="jumbotron">
			<h1 class="display-2 border-bottom">Form Edit</h1>
			<p class="lead">Mohon data disini dengan lengkap dan jelas.</p>
		</div>
		
		<form class="form-horizontal" method="POST" action="proses_edit.php">
		<input type="hidden" name="id" value="<?php echo $id;?>"></input>
			<div class="form-group">
				<label class="control-label col-sm2" for="nama">Nama : </label>
				<div class="col-sm8">
					<?php echo "<input type='text' class='form-control' name='nama' placeholder='Nama' required='1' value='".$data['nama']."'></input>"; ?>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm2" for="no_ktp">Nomor KTP : </label>
				<div class="col-sm10">
					<?php echo "<input type='text' class='form-control' name='no_ktp' placeholder='Nama' required='1' value='".$data['no_ktp']."'></input>"; ?>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm2" for="no_tlp">Nomor Telepon : </label>
				<div class="col-sm8">
					<?php echo "<input type='text' class='form-control' name='no_tlp' placeholder='Nama' required='1' value='".$data['no_tlp']."'></input>"; ?>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm2" for="alamat">Alamat : </label>
				<div class="col-sm8">
					<?php echo "<textarea class='form-control' rows='5' name='alamat' style='resize: none;' required='1'>".htmlspecialchars($data['alamat'])."</textarea>"; ?>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm2" for="durasi">Durasi : </label>
				<div class="col-sm8">
					<select class="form-control" required="1" name="durasi">
						<option>1 Hari</option>
						<option>2 Hari</option>
						<option>3 Hari</option>
					</select>
				</div>
			</div>
			<?php
					if($data['barang'] == "PS 2"){
						?>
						<div class="form-group">
							<label class="control-label col-sm2" for="barang">Barang : </label>
							<div class="col-sm8">
								<input type="text" class="form-control" name="barang" value="PS 2" readonly="1"></input>
							</div>
						</div>
					<?php }
					if($data['barang'] == "PS 3"){
						?>
						<div class="form-group">
							<label class="control-label col-sm2" for="barang">Barang : </label>
							<div class="col-sm8">
								<input type="text" class="form-control" name="barang" value="PS 3" readonly="1"></input>
							</div>
						</div>
					<?php }
					if($data['barang'] == "PS 4"){
						?>
						<div class="form-group">
							<label class="control-label col-sm2" for="barang">Barang : </label>
							<div class="col-sm8">
								<input type="text" class="form-control" name="barang" value="PS 4" readonly="1"></input>
							</div>
						</div>
					<?php }
			?>
			<center><input type="submit" class="btn btn-primary" name="SUBMIT" style="margin-bottom: 50px;"></input></center>
		</form>
	</div>

</body>
</html>