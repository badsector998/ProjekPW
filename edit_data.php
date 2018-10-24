<!DOCTYPE html>
<html>
<head>
	<title>Rental PS</title>
</head>
<?php
	include "koneksi.php";

	$id = $_GET['id'];

	$query = mysqli_query($koneksi,"select *from rental_ps where id= '$id'") or die(mysqli_error());

	$data = mysqli_fetch_array($query) or die(mysqli_error());
?>
<body>
	<h1 align="center"> EDIT RENTAL PS</h1>
	<hr> <center>
		<form method="POST" action="proses_edit.php">
			<table align="center">
				<input type="hidden" name="id" value="<?php echo $id?>">
				<tr>
					<td> nama </td>
					<td> : </td>
					<td> <input type="text" name="nama"> </td>
				</tr>
				<tr>
					<td> no_ktp </td>
					<td> : </td>
					<td> <input type="text" name="no_ktp"> </td>
				</tr>
				<tr>
					<td> no_tlp </td>
					<td> : </td>
					<td> <input type="text" name="no_tlp"> </td>
				</tr>
				<tr>
					<td> alamat </td>
					<td> : </td>
					<td> <input type="text" name="alamat"> </td>
				</tr>
				<tr>
					<td> durasi </td>
					<td> : </td>
					<td> <textarea name="durasi"></textarea> </td>
				</tr>
				<tr>
					<td> barang </td>
					<td> : </td>
					<td> <input type="text" name="barang"> </td>
				</tr>
			</table>
			<br>
			<input type="submit" value="submit" name="submit">
			<input type="reset" class="button" name="reset" value="Reset">
			
		</form>
	</center>

</body>
</html>