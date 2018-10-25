<?php
	include "koneksi.php";
	$nama = $_POST['nama'];
	$no_ktp = $_POST['no_ktp'];
	$no_tlp = $_POST['no_tlp'];
	$alamat = $_POST['alamat'];
	$durasi = $_POST['durasi'];
	$barang = $_POST['barang'];
	if(isset($_POST['submit'])){
		$id = $_POST['id'];
	}
	$query = mysqli_query($koneksi," update rental_ps set nama='$nama',no_ktp='$no_ktp',no_tlp='$no_tlp',alamat='$alamat',durasi='$durasi'where id='$id'") or die(mysqli_error($koneksi));

if($query){
	header("Location: tampil_data.php");
}else{
	echo "Proses hapus gagal";
}
?>