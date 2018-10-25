<!DOCTYPE html>
<html>
<head>
	<title>Pesanan</title>
	<link rel="stylesheet" type="text/css" href="btstp/css/bootstrap.min.css">
	<script type="text/javascript" src="btstp/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="btstp/js/bootstrap.js"></script>
</head>
<body>


	<div class="container">
		<div class="jumbotron">
			<h1 class="display-2 border-bottom">Form Isian</h1>
			<p class="lead">Mohon data disini dengan lengkap dan jelas.</p>
		</div>
		
		<form class="form-horizontal" method="POST" action="proses_input.php">
			<div class="form-group">
				<label class="control-label col-sm2" for="nama">Nama : </label>
				<div class="col-sm8">
					<input type="text" class="form-control" name="nama" placeholder="Nama" required="1"></input>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm2" for="no_ktp">Nomor KTP : </label>
				<div class="col-sm10">
					<input type="text" class="form-control" name="no_ktp" placeholder="Nomor KTP" required="1"></input>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm2" for="no_tlp">Nomor Telepon : </label>
				<div class="col-sm8">
					<input type="text" class="form-control" name="no_tlp" placeholder="Nomor Telepon" required="1"></input>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm2" for="alamat">Alamat : </label>
				<div class="col-sm8">
					<textarea class="form-control" rows="5" name="alamat" style="resize: none;" required="1"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm2" for="durasi">Durasi : </label>
				<div class="col-sm8">
					<select class="form-control" name="durasi" required="1">
						<option>1 Hari</option>
						<option>2 Hari</option>
						<option>3 Hari</option>
					</select>
				</div>
			</div>
			<?php
					if($_GET['order'] == "PS2"){
						?>
						<div class="form-group">
							<label class="control-label col-sm2" for="barang">Barang : </label>
							<div class="col-sm8">
								<input type="text" class="form-control" name="barang" value="PS 2" readonly="1"></input>
							</div>
						</div>
					<?php }
					if($_GET['order'] == "PS3"){
						?>
						<div class="form-group">
							<label class="control-label col-sm2" for="barang">Barang : </label>
							<div class="col-sm8">
								<input type="text" class="form-control" name="barang" value="PS 3" readonly="1"></input>
							</div>
						</div>
					<?php }
					if($_GET['order'] == "PS4"){
						?>
						<div class="form-group">
							<label class="control-label col-sm2" for="barang">Barang : </label>
							<div class="col-sm8">
								<input type="text" class="form-control" name="barang" value="PS 4" readonly="1"></input>
							</div>
						</div>
					<?php }
			?>

			<input type="submit" class="btn btn-success" name="SUBMIT" style="margin-bottom: 50px;"></input>
		</form>
	</div>

</body>
</html>