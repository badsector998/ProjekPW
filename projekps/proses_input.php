<?php
include'koneksi.php';

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

$query = mysqli_query($koneksi,"insert into rental_ps values('','$nama','$no_ktp','$no_tlp','$alamat','$durasi','$barang','$harga')");

if($query!="") {
	echo "Pesanan anda telah diterima, mohon segera membayar sebesar $harga. Kembali klik <a href=ProjectPS.html>disini</a>.";
}
else
{
	echo "Data gagal ditambahkan";
}
?>