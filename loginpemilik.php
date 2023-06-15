<?php 

session_start();
include 'konek.php';
$usernamee = $_POST['username'];
$passwordd = $_POST['pass'];
$_SESSION['mitra']=$usernamee;


$sqllogin="SELECT * FROM `mitra` WHERE username_mitra='$usernamee' AND password='$passwordd'";
$querilogin = mysqli_query($koneksi,$sqllogin);
// variabel hasil berbentuk array, punya key
$hasil = mysqli_fetch_array($querilogin);

if($usernamee==$hasil['username_mitra'] and $passwordd==$hasil['password']){
		header('location:pagepemilik.php');
	}
	else{
	header('location:pemilik.php?log=0');
}
 ?>