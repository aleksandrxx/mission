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

	$nomer_udal = htmlentities($_POST['id_del']);  
	/* echo "<script>alert('a');</script>"; */
	/* echo "<script>var a='"$nomer_udal"'; alert(a);</script>"; */

 	$select= mysqli_query($str, "UPDATE `klient` SET `del_klient`='0' WHERE `id_klient` = '{$nomer_udal}'");
 	include 'tablica.php';	
?>