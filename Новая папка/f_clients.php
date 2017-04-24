<style type="text/css">
	#show_data{
		width: 1250px;
	}
	.show_table{
		width: 950px;
	}
</style>
<div class="form_add">
	<h3 class="h">Добавить клиента</h3>
	<form method="post" action="add_data.php">
		
		<input class="txtbx" type="text" name="surname" placeholder="Фамилия"><br>
		<input class="txtbx" type="text" name="name" placeholder="Имя"><br>
		<input class="txtbx" type="text" name="patronymic" placeholder="Отчество"><br>
		<input class="txtbx" type="date" name="birthday" placeholder="Дата рождения"><br>
		<input class="txtbx" type="text" name="phone" placeholder="Телефон"><br>
		<input class="txtbx" type="text" name="email" placeholder="E-mail"><br>
		<input class="txtbx" type="text" name="password" placeholder="Пароль"><br>
		<input class="txtbx" type="text" name="advertiser" placeholder="Рекламодатель"><br>
		<select class="txtbx" name="user_status">
			<?
				include "connect.php";
				$req = mysql_query("SELECT * FROM user_statuses");
				while($value = mysql_fetch_array($req)){
					echo '
						<option value="'.$value[0].'">'.$value[1].'</option>
					';
				}
			?>
		</select><br>
		<input class="txtbx" type="submit" name="clients" value="Добавить">
		<input type="hidden" name="table" value="clients">	
	</form>
</div>
<div class="show_table">
	<h3 class="h">Таблица: Клиент</h3>
	<table>
		<tr>
			<td class="first">Фамилия Имя Отчество</td>
			<td class="column">Дата рождения</td>
			<td class="column">Телефон</td>
			<td class="column">E-mail</td>
			<td class="column">Рекламодатель</td>
			<td class="column">Статус</td>
		</tr>
		<?
			include "connect.php";
			$req = mysql_query("SELECT c.id, surname, u.name, patronymic, birthday, phone, email, advertiser, us.name, u.id FROM users u join clients c on u.id = c.client_id join user_statuses us on c.user_status=us.id;");
			while($value = mysql_fetch_array($req)){
				echo '
					<tr>
						<td class="first">'.$value[1].' '.$value[2].' '.$value[3].'</td>
						<td class="column">'.$value[4].'</td>
						<td class="column">'.$value[5].'</td>
						<td class="column">'.$value[6].'</td>
						<td class="column">'.$value[7].'</td>
						<td class="column">'.$value[8].'</td>
						<td>
							<form method="post" action="form_edit.php">
								<input type="image" src="img/edit.png" width="20">
								<input type="hidden" name="id" value="'.$value[0].'">
								<input type="hidden" name="table" value="clients">
							</form>
						</td>
						<td>
							<form method="post" action="delete_data.php">
								<input type="image" src="img/del.png" width="20"> 
								<input type="hidden" name="id" value="'.$value[9].'">
								<input type="hidden" name="table" value="clients">
							</form>
						</td>
					</tr>
				';
			}
		?>
	</table>
</div>
