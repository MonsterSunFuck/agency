<?
	session_start();
?>
<style type="text/css">
	.h3{
		padding: 0 0 20px 50px;
		margin: 0;
		height: 25px;
		font: 20px Helvetica;
	}
	.simple_data .first{
		text-align: right;
		padding-right: 5px;
		border: 0;
	}
	.simple_data .second{
		padding-left: 5px;
		border: 0;
		text-align: left;
	}
</style>
<?
	include "connect.php";

	$id = $_SESSION["auth_user"];
	if($_SESSION["access"] == 'client'){
		$user_data = mysql_fetch_array(mysql_query("SELECT * FROM data_client WHERE client_id=$id"));
		echo '
		<h3 class="h3">Мои данные</h3>
		<table class="simple_data">
			<tr>
				<td class="first">Рекламодатель:</td>
				<td class="second">'.$user_data[1].'</td>
			</tr>
			<tr>
				<td class="first">Фамилия:</td>
				<td class="second">'.$user_data[2].'</td>
			</tr>
			<tr>
				<td class="first">Имя:</td>
				<td class="second">'.$user_data[3].'</td>
			</tr>
			<tr>
				<td class="first">Отчество:</td>
				<td class="second">'.$user_data[4].'</td>
			</tr>
			<tr>
				<td class="first">Телефон:</td>
				<td class="second">'.$user_data[5].'</td>
			</tr>
			<tr>
				<td class="first">E-mail:</td>
				<td class="second">'.$user_data[6].'</td>
			</tr>
			<tr>
				<td class="first">Логин:</td>
				<td class="second">'.$user_data[7].'</td>
			</tr>
			<tr>
				<td class="first">Пароль:</td>
				<td class="second">Зашифровано</td>
			</tr>
		</table>
		<button class="withtext"><a href="javascript:void(0)" onclick="AjaxRequest (\'users_data\', \'edit_user_data.php\');">Изменить данные</a>';
	}
	else{
		$user_data = mysql_fetch_array(mysql_query("SELECT * FROM data_staff WHERE staff_id=$id"));
		echo '
		<h3 class="h3">Мои данные</h3>
		<table class="simple_data">
			<tr>
				<td class="first">Фамилия:</td>
				<td class="second">'.$user_data[1].'</td>
			</tr>
			<tr>
				<td class="first">Имя:</td>
				<td class="second">'.$user_data[2].'</td>
			</tr>
			<tr>
				<td class="first">Отчество:</td>
				<td class="second">'.$user_data[3].'</td>
			</tr>
			<tr>
				<td class="first">Дата рождения:</td>
				<td class="second">'.$user_data[4].'</td>
			</tr>
			<tr>
				<td class="first">Адрес:</td>
				<td class="second">'.$user_data[5].'</td>
			</tr>
			<tr>
				<td class="first">Телефон:</td>
				<td class="second">'.$user_data[6].'</td>
			</tr>
			<tr>
				<td class="first">E-mail:</td>
				<td class="second">'.$user_data[7].'</td>
			</tr>
			<tr>
				<td class="first">Паспорт:</td>
				<td class="second">'.$user_data[8].'</td>
			</tr>
			<tr>
				<td class="first">Должность:</td>
				<td class="second">'.$user_data[9].'</td>
			</tr>
			<tr>
				<td class="first">Логин:</td>
				<td class="second">'.$user_data[10].'</td>
			</tr>
			<tr>
				<td class="first">Пароль:</td>
				<td class="second">Зашифровано</td>
			</tr>
		</table>
		<button class="withtext"><a href="javascript:void(0)" onclick="AjaxRequest (\'users_data\', \'edit_user_data.php\');">Изменить данные</a>';
	}
	

	

?>