<?php
	include('configdb.php');
	$vtype = $_POST['vtype'];
	$harga = $_POST['harga'];
	$k1 = $_POST['k1'];
	$k2 = $_POST['k2'];
	$k3 = $_POST['k3'];
	$k4 = $_POST['k4'];
	$k5 = $_POST['k5'];
	$k6 = $_POST['k6'];
	$id_alt = rand(1, 1000000) ;
	$result = $mysqli->query("INSERT INTO `datalaptop` (`id_alternatif`, `vtype`,`harga`, `k1`, `k2`, `k3`, `k4`, `k5`,`k6`)
								VALUES ($id_alt, '".$vtype."', '".$harga."','".$k1."', '".$k2."', '".$k3."', '".$k4."', '".$k5."', '".$k6."');");
	if(!$result){
		// echo "Gagal";
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: alternatif.php');
	}
?>
