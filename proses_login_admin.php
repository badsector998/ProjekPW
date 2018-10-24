<?php
	session_start();
	include "koneksi.php";
	$uname = $_POST['username'];
    $pass = $_POST['password'];
	$query1 = "select * from adm where user='".$uname."' AND pass='".$pass."'";
	$data = mysqli_query($koneksi,$query1);
    $query2 = mysqli_fetch_array($data);
	if(!mysqli_num_rows($data)>1){
		echo "cek password/username anda";
		header("location:login_admin.php?pesan=gagal");
	}else{
		if($uname==$query2['user'] AND $pass==$query2['pass']){
			header("location:admin.php");
            $_SESSION['username'] = $query2['user'];
            $_SESSION['status'] = "Online";
		}
	}
?>