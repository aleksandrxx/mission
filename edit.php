<?php
	$hostname = "sobesedovanie";
	$username = "root";
	$password = ""; 
	$dbname = "sobesedovanie";
	$charset = 'utf8';
					
	$str= mysqli_connect($hostname,$username,$password,$dbname);	
	if (!$str) {
		echo 'error: ' . mysqli_connect_errno() . ', error: ' . mysqli_connect_error();
		exit;
	}	
	
	$id_klient = htmlentities($_POST['edit_id']);
	$family_klient = htmlentities($_POST['family_klient_edit']); 
	$name_klient = htmlentities($_POST['name_klient_edit']); 
	$surname_klient = htmlentities($_POST['surname_klient_edit']); 
	$tel_klient = htmlentities($_POST['tel_klient_edit']); 
	$kem_klient = htmlentities($_POST['kem_klient_edit']); 
	
	
	$select= mysqli_query($str, "UPDATE `klient` SET `family_klient` = '{$family_klient}', `name_klient`='{$name_klient}', `surname_klient`='{$surname_klient}', `tel_klient`='{$tel_klient}', `kem_klient`='{$kem_klient}',`del_klient`=1 WHERE `id_klient`= '{$id_klient}'");

	
	include 'tablica.php';	
?>