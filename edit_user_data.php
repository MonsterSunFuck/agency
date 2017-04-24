<?
	session_start();
	include "connect.php";
?>
<style type="text/css">
	.h3{
		padding: 0 0 20px 50px;
		margin: 0;
		height: 25px;
		font: 20px Helvetica;
	}
	#show_data{
		height: 460px;
	}
</style>

<h3 class="h3">Изменить данные</h3>
<?
	$id = $_SESSION["auth_user"];
	if($_SESSION["access"] == 'client'){
		$data_change = mysql_fetch_array(mysql_query("SELECT * FROM data_client WHERE client_id=$id"));
		echo '
		<form method="post" action="modify_user_data.php">
			<input class="withtext" type="text" name="advertiser" value="'.$data_change[1].'" placeholder="Рекламодатель" required><br>
			<input class="withtext" type="text" name="surname" value="'.$data_change[2].'" placeholder="Фамилия" required><br>
			<input class="withtext" type="text" name="name" value="'.$data_change[3].'" placeholder="Имя" required><br>
			<input class="withtext" type="text" name="patronymic" value="'.$data_change[4].'" placeholder="Отчество" required><br>
			<input class="withtext" type="text" name="phone" value="'.$data_change[5].'" placeholder="Телефон" required><br>
			<input class="withtext" type="text" name="email" value="'.$data_change[6].'" placeholder="E-mail" required><br>
			<input class="withtext" type="text" name="login" value="'.$data_change[7].'" placeholder="Логин" required><br>
			<input class="withtext" type="password" name="old_password" value="" placeholder="Введите старый пароль" ><br>
			<input class="withtext" type="password" name="new_password" value="" placeholder="Введите новый пароль"><br>
			<input class="withtext" type="password" name="check_password" value="" placeholder="Повторите новый пароль">
			<input type="hidden" name="id" value="'.$id.'"><br>
			<input class="withtext" type="submit" name="edit_data" value="Готово"><br>
		</form>
		';
	}
	else{
		$data_change = mysql_fetch_array(mysql_query("SELECT * FROM data_staff WHERE staff_id=$id"));
		echo '
		<form method="post" action="modify_user_data.php">
			<input class="withtext" type="text" name="surname" value="'.$data_change[1].'" placeholder="Фамилия" required><br>
			<input class="withtext" type="text" name="name" value="'.$data_change[2].'" placeholder="Имя" required><br>
			<input class="withtext" type="text" name="patronymic" value="'.$data_change[3].'" placeholder="Отчество" required><br>
			<input class="withtext" type="date" name="birthday" value="'.$data_change[4].'" placeholder="Дата рождения" required><br>
			<input class="withtext" type="text" name="address" value="'.$data_change[5].'" placeholder="Адрес" required><br>
			<input class="withtext" type="tel" pattern="+7 ([0-9]{3}) [0-9]{3}-[0-9]{2}-[0-9]{2}" name="phone" value="'.$data_change[6].'" placeholder="Телефон" required="Введите номер в формате +7(999)999-9999"><br>
			<input class="withtext" type="text" name="email" value="'.$data_change[7].'" placeholder="E-mail" required><br>
			<input class="withtext" type="text" name="passport" value="'.$data_change[8].'" placeholder="Паспорт" required><br>
			<input class="withtext" type="text" name="post" value="'.$data_change[9].'" placeholder="Должность" readonly><br>
			<input class="withtext" type="text" name="login" value="'.$data_change[10].'" placeholder="Логин" required><br>
			<input class="withtext" type="password" name="old_password" value="" placeholder="Введите старый пароль" ><br>
			<input class="withtext" type="password" name="new_password" value="" placeholder="Введите новый пароль"><br>
			<input class="withtext" type="password" name="check_password" value="" placeholder="Повторите новый пароль">
			<input type="hidden" name="id" value="'.$id.'"><br>
			<input class="withtext" type="submit" name="edit_data" value="Готово"><br>
		</form>
		';
	}
?>
