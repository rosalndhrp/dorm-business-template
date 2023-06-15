<?php
	session_start();
	include 'konek.php';

	$nama1 = $_POST['nama'];
	$username1 = $_POST['username'];
	$password1 = $_POST['pass'];
	$alamat1 = $_POST['alamat'];
	$telepon1 = $_POST['telepon'];
	$email1 = $_POST['email'];
	$kelamin1 = $_POST['kelamin'];


	$_SESSION['mitra']=2;

	$sqldaftar = "INSERT INTO `mitra`VALUES ('','$username1','$nama1','$email1','$password1','$telepon1','$alamat1','$kelamin1')";
	$simpan=mysqli_query($koneksi,$sqldaftar);

	if ($simpan) {
	header('location:pagepemilik.php');
}
  ?>