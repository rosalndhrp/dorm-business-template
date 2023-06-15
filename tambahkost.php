<?php 
	session_start();
		include 'konek.php';

	$namakost = $_POST['namakos'];
	$harga = $_POST['harga'];
	$alamat = $_POST['alamat'];
	// $foto = $_POST['foto'];
	$kota = $_POST['kota'];
	$kampus = $_POST['kampus'];
	$slot = $_POST['slot'];
	$deskripsi = $_POST['deskripsi'];
	$idmitra = $_SESSION['mitra'];
	// $_SESSION['kos']=;

	$sqltambahkost = "INSERT INTO `kos`VALUES ('','$namakost','$alamat','$harga','$idmitra','','$kota','kampus','$slot','$deskripsi')";
	$simpan=mysqli_query($koneksi,$sqltambahkost);

	if ($simpan) {
		// header('location:pemilik.php/?log=2');
		header('location:pagepemilik.php');

	}

 ?>