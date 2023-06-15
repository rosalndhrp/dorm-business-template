<?php
session_start();
include 'konek.php';

$namai = $_POST['nama'];
$usernamei = $_POST['username'];
$passwordi = $_POST['pass'];
$alamati = $_POST['alamat'];
$teleponi = $_POST['telepon'];
$emaili = $_POST['email'];
$kelamini = $_POST['kelamin'];
$_SESSION['user']=1;


// echo $namai,$usernamei,$passwordi,$alamati,$teleponi,$emaili,$kelamini;
$sqldaftar = "INSERT INTO `user`VALUES ('','$usernamei','$namai','$alamati','$teleponi','$emaili','$passwordi','$kelamini')";
$simpan=mysqli_query($koneksi,$sqldaftar);

if ($simpan) {
	// header('location:lokasi.php/?log=1');
    echo "<script> 
    r =confirm('berhasil daftar');
    	if (r == true) {
    		;	
		}   
	</script>";
	// header('location:lokasi.php');


}

?>