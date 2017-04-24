<!--
<div class="form_add">
	<h3 class="h">Добавить пользователя</h3>
	<form method="post" action="add_data.php">
		<input class="txtbx" type="text" name="surname" placeholder="Фамилия"><br>
		<input class="txtbx" type="text" name="name" placeholder="Имя"><br>
		<input class="txtbx" type="text" name="patronymic" placeholder="Отчество"><br>
		<input class="txtbx" type="text" name="birthday" placeholder="Дата рождения"><br>
		<input class="txtbx" type="text" name="phone" placeholder="Телефон"><br>
		<input class="txtbx" type="text" name="email" placeholder="E-mail"><br>
		<input class="txtbx" type="text" name="password" placeholder="Пароль"><br>
		<select class="txtbx" name="access">
			<option value="admin">Администратор</option>
			<option value="client">Клиент</option>
		</select><br>
		<input class="txtbx" type="submit" name="users" value="Добавить">
		<input type="hidden" name="table" value="users">	
	</form>
</div>
-->
<div class="show_table">
	<h3 class="h">Таблица: Пользователи</h3>
	<table>
		<tr>
			<td class="first">Фамилия Имя Отчество</td>
			<td class="column">Дата рождения</td>
			<td class="column">Телефон</td>
			<td class="column">E-mail</td>
			<td class="column">Пароль</td>
			<td class="column">Статус</td>
		</tr>
		<?
			include "connect.php";
			$req = mysql_query("SELECT * FROM users");
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
								<input type="hidden" name="table" value="users">
							</form>
						</td>
					</tr>
				';
			}
		?>
	</table>
	<p>Примечание, данные пользователя будут удалены вместе с удалением сотрудника или клиента.</p>
</div>