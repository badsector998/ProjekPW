<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE from rental_ps where id = $id");

if($query){
	header("Location: damin.php");
}else{
	echo "Proses hapus gagal";
}