<?php
$hostname = "sobesedovanie";
			$username = "root";
			$password = ""; 
			$dbname = "sobesedovanie";
			$charset = 'utf8';
$str= mysqli_connect($hostname,$username,$password,$dbname);

$select= mysqli_query($str, "SELECT * FROM `klient`");

$nomer_udal = htmlentities($_POST['number']); 

while ($row = mysqli_fetch_array($select)) {
	if ($row['id_klient']==$nomer_udal){
	echo $row['family_klient']."_".$row['name_klient']."_".$row['surname_klient']."_".$row['tel_klient']."_".$row['kem_klient'];
	}
}
?>