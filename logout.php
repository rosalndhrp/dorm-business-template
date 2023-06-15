<?php
	session_start();
	session_destroy();
	header('location:lokasi.php');
?>