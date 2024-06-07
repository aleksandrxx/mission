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
	
	$family_klient = htmlentities($_POST['family_klient']); 
	$name_klient = htmlentities($_POST['name_klient']); 
	$surname_klient = htmlentities($_POST['surname_klient']); 
	$tel_klient = htmlentities($_POST['tel_klient']); 
	$kem_klient = htmlentities($_POST['kem_klient']); 
	
	if ($family_klient !='' and $name_klient !='' and $surname_klient !='' and $tel_klient !='' and $kem_klient !=''){
		$select= mysqli_query($str, "INSERT INTO `klient` (`family_klient`, `name_klient`, `surname_klient`, `tel_klient`, `kem_klient`,`del_klient`) VALUES ('{$family_klient}','{$name_klient}','{$surname_klient}','{$tel_klient}','{$kem_klient}','1');");
	}	
	
	include 'tablica.php';	
?>