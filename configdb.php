<?php
	@session_start();
	$_SESSION['judul'] = 'SPK WP LAPTOP';
	$_SESSION['welcome'] = 'SISTEM PENGAMBIL KEPUTUSAN BERBASIS WEB DENGAN METODE WEIGHT PRODUCT';
	$_SESSION['by'] = 'TUGAS SPK KELOMPOK _5';
	$mysqli = new mysqli('localhost','root','','spk');
	if($mysqli->connect_errno){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
?>
