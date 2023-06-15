<?php
session_start();
include 'konek.php';
$usernamei = $_POST['username'];
$passwordi = $_POST['pass'];

$usernamee = $_POST['username'];
$passwordd = $_POST['pass'];

$_SESSION['user']=1;
$_SESSION['mitra']=2;





$sqllogin="SELECT * FROM `user` WHERE username='$usernamei' AND password='$passwordi'";
$querilogin = mysqli_query($koneksi,$sqllogin);

// variabel hasil berbentuk array, punya key
$hasil = mysqli_fetch_array($querilogin);




if ($usernamei==$hasil['username'] and $passwordi==$hasil['password']) {
	header('location:lokasi.php');
	
}else{
	header('location:pencari.php?log=0');
}
?>