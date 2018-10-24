<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$db_name  = "projekps";

	$koneksi =  mysqli_connect($hostname, $username, $password,$db_name);

	if(!$koneksi){
		echo "Gagal";
	}
?>