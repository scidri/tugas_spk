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
	
	$result = $mysqli->query("UPDATE datalaptop SET `vtype` = '".$vtype."', `harga` = '".$harga."',`k1` = '".$k1."',`k2` = '".$k2."',`k3` = '".$k3."',`k4` = '".$k4."',`k5` = '".$k5."',`k6` = '".$k6."' WHERE `id_alternatif` = ".$_GET['id'].";");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: alternatif.php');
	}
?>