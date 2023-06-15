<?php
$host ='localhost';
$user ='root';
$pass ='';
$db	  ='db_kos';

$koneksi = mysqli_connect($host,$user,$pass,$db);

if($koneksi){
	// echo "tersambung ke database";
	// header("location:index.php");
}else{
	echo "gagal ke database : ". mysqli_connect_error();
}

?>