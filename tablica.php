<table border>
			<tr>
				<th>ФИО</th>
				<th>Телефон</th>
				<th>Кем приходится</th>
				<th>Кнопки действий</th>
			</tr>
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
			$select= mysqli_query($str, "SELECT * FROM `klient`");			
			while ($row = mysqli_fetch_array($select)) {
				if ($row['del_klient']==1){
					echo "<tr>";
					echo "<td class='t_klient'>".$row['family_klient'].' '.$row['name_klient']."<br>".$row['surname_klient']."</td>";
					echo "<td class='t_klient'>".$row['tel_klient']."</td>";
					echo "<td class='t_klient'>".$row['kem_klient']."</td>";
					echo "<td class='t_klient'><input type='button' class='submit2 inp_but' value='Удалить' name='".$row['id_klient']."'><br><input type='button' class='submit3 inp_but' value='Редактировать' name='".$row['id_klient']."'></td>";
					echo "</tr>";
				}
			}	
			?>
		</table>