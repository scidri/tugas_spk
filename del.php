<?php
	include('configdb.php');
	
	$result = $mysqli->query("delete from datalaptop where id_alternatif = ".$_GET['id'].";");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: alternatif.php');
	}
?>