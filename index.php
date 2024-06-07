<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Телефонный справочник</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript">

	$(function(){
		$('#submit').click(function(){
			$.ajax({ 
				type: "post",
				url: "add.php",
				data: $('#form').serialize(),
				success: function(response) {
					$('#tablica').html(response);
				}
			})
		});
	});
	
	$(function(){
		$('.submit2').click(function(){
			document.getElementById('window_del').style.display = 'flex';
			document.getElementById('shadow_div').style.display = 'flex';
			
			var data = {
				number : this.name			
			};	
			var str = '';
			$.ajax({ 
				type: "post",
				async: false,
				url: "search.php",
				data: data,		
				success: function(data) {
					str = data;
				}
			});
			
			var stroki = str.split('_');
			
			document.getElementsByName('id_del')[0].value=this.name;
			document.getElementsByName('family_klient_del')[0].value=stroki[0];
			document.getElementsByName('name_klient_del')[0].value=stroki[1];
			document.getElementsByName('surname_klient_del')[0].value=stroki[2];
			document.getElementsByName('tel_klient_del')[0].value=stroki[3];
			document.getElementsByName('kem_klient_del')[0].value=stroki[4];
	
		});
	});
	
	$(function(){
		$('#submit_3').click(function(){
			$.ajax({ 
				type: "post",
				url: "del.php",
				data: $('#form').serialize(),
				success: function(response) {
					$('#tablica').html(response);
				}
			})
		});
	});
	
	$(function(){
		$('#submit_2').click(function(){
			$.ajax({ 
				type: "post",
				url: "edit.php",
				data: $('#form').serialize(),
				success: function(response) {
					$('#tablica').html(response);
				}
			})
		});
	});
	
	$(function(){
		$('.submit3').click(function(){
			document.getElementById('window_edit').style.display = 'flex';
			document.getElementById('shadow_div').style.display = 'flex';
			var data = {
				number : this.name			
			};	
			var str = '';
			$.ajax({ 
				type: "post",
				async: false,
				url: "search.php",
				data: data,		
				success: function(data) {
					str = data;
				}
			});
			
			var stroki = str.split('_');
			
			document.getElementsByName('edit_id')[0].value=this.name;
			document.getElementsByName('family_klient_edit')[0].value=stroki[0];
			document.getElementsByName('name_klient_edit')[0].value=stroki[1];
			document.getElementsByName('surname_klient_edit')[0].value=stroki[2];
			document.getElementsByName('tel_klient_edit')[0].value=stroki[3];
			document.getElementsByName('kem_klient_edit')[0].value=stroki[4];
			
		});
	});
	
	
	
	</script>
</head>
<body>
	<div class="okna">
	<form id="form" method="post">
	<div id='window_del' class="window">
				<table>
					<tr>
						<td class="okno_title" colspan=2><h3>Удалить данные?</h3></td>	
						<td><input name="id_del" hidden></td>
					</tr>
					<tr>
						<td>Фамилия</td>
						<td><output name="family_klient_del" ></td>
					</tr>
					<tr>
						<td>Имя</td>
						<td><output name="name_klient_del" ></td>
					</tr>
					<tr>
						<td>Отчество</td>
						<td><output name="surname_klient_del" ></td>
					</tr>
					<tr>
						<td>Телефон</td>
						<td><output type="tel" name="tel_klient_del" maxlength="11" ></td>
					</tr>
					<tr>
						<td>Кем выдан</td>
						<td><output name="kem_klient_del" ></td>
					</tr>
					<tr>
						<td><button id="submit_3" class="inp_but">Удалить</button></td>
						<td><input type="button" class="inp_but" value="Отменить" onclick="document.getElementById('window_del').style.display = 'none'; document.getElementById('shadow_div').style.display = 'none';"></td></td>
					</tr>
				</table>

		</div>
		<div id='window_create' class="window">
			
				<table>
					<tr>
						<td class="okno_title" colspan=2><h3>Добавление</h3></td>	
					</tr>
					<tr>
						<td>Фамилия</td>
						<td><input name="family_klient" ></td>
					</tr>
					<tr>
						<td>Имя</td>
						<td><input name="name_klient" ></td>
					</tr>
					<tr>
						<td>Отчество</td>
						<td><input name="surname_klient" ></td>
					</tr>
					<tr>
						<td>Телефон</td>
						<td><input type="tel" name="tel_klient" maxlength="11" ></td>
					</tr>
					<tr>
						<td>Кем выдан</td>
						<td><input name="kem_klient" ></td>
					</tr>
					<tr>
						<td><button id="submit" class="inp_but">Сохранить</button></td>
						<td><input type="button" class="inp_but" value="Отменить" onclick="document.getElementById('window_create').style.display = 'none'; document.getElementById('shadow_div').style.display = 'none';"></td></td>
					</tr>
				</table>
			
		</div>
		<div id='window_edit' class="window">
			
				<table>
					<tr>
						<td class="okno_title" colspan=2><h3>Редактирование</h3></td>
						<td><input name="edit_id" hidden></td>
					</tr>
					<tr>
						<td>Фамилия</td>
						<td><input name="family_klient_edit" ></td>
					</tr>
					<tr>
						<td>Имя</td>
						<td><input name="name_klient_edit" ></td>
					</tr>
					<tr>
						<td>Отчество</td>
						<td><input name="surname_klient_edit" ></td>
					</tr>
					<tr>
						<td>Телефон</td>
						<td><input type="tel" name="tel_klient_edit" maxlength="11" ></td>
					</tr>
					<tr>
						<td>Кем выдан</td>
						<td><input name="kem_klient_edit" ></td>
					</tr>
					<tr>
						<td><button id="submit_2" class="inp_but">Сохранить</button></td>
						<td><input type="button" class="inp_but" value="Отменить" onclick="document.getElementById('window_edit').style.display = 'none'; document.getElementById('shadow_div').style.display = 'none';"></td></td>
					</tr>
				</table>
			
		</div>
		</form>
		</div>
		
	<div class='osnova'>
		
		
			
			<input class="inp_but" type="button" value="Добавить" onclick="document.getElementById('window_create').style.display = 'flex'; document.getElementById('shadow_div').style.display = 'flex';">
			
			<div id="tablica">
				<?php 
				include 'tablica.php';
				?>	
			</div>
	
		<div class="shadow_div" id="shadow_div" onclick="document.getElementById('shadow_div').style.display = 'none'; document.getElementById('window_create').style.display = 'none';document.getElementById('window_edit').style.display = 'none';document.getElementById('window_del').style.display = 'none';"></div>
		
		
	</div>
	
	
</body>
</html>





