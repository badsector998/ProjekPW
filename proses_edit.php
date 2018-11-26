<?php
	include "koneksi.php";
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$no_ktp = $_POST['no_ktp'];
	$no_tlp = $_POST['no_tlp'];
	$alamat = $_POST['alamat'];
	$durasi = $_POST['durasi'];
	$barang = $_POST['barang'];
		switch ($barang) {
		case 'PS 2':
			$harga = $durasi*20000;
			break;
		case 'PS 3':
			$harga = $durasi*22000;
			break;
		case 'PS 4':
			$harga = $durasi*25000;
			break;
		}
	$sql = "UPDATE  `projekps`.`rental_ps` SET  `nama` =  '$nama',
`no_ktp` =  '$no_ktp',
`no_tlp` =  '$no_tlp',
`alamat` =  '$alamat',
`durasi` =  '$durasi',
`harga` =  '$harga' WHERE  `rental_ps`.`id` =$id;";
	$query = mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi));
if($query){
	header("Location: admin.php");
}else{
	echo "Proses hapus gagal";
}
?>