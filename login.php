<?
	include "main_header.php";
?>
<div id="form-auth">
	<div id="show_content">
		<div id="log_in">
			<h2>Авторизация</h2>
			<form method="post" action="code_auth.php">
				<input class="withtext" type="text" name="login" placeholder="Логин" required><br>
				<input class="withtext" type="password" name="epass" placeholder="Пароль" required><br>
				<input class="withtext" type="submit" name="enter" value="Войти">
			</form>
		</div>
		<div id="register">
			<h2>Регистрация</h2>
			<form method="post" action="code_register.php">
				<input class="withtext" type="text" name="name" placeholder="Имя" required ><br>
				<input class="withtext" type="text" name="phone" placeholder="Номер телефона" required><br>
				<input class="withtext" type="email" name="email" placeholder="E-mail" required><br>
				<input class="withtext" type="text" name="login" placeholder="Логин" required><br>
				<input class="withtext" type="password" name="pass" placeholder="Пароль" required><br>
				<input class="withtext" type="password" name="passtwo" placeholder="Повторите пароль" required><br>
				<input class="withtext" type="submit" name="reg" value="Зарегистрироваться"><br>
			</form>
		</div>
	</div>
	
		<br><a id="back" href="index.php"><< Вернуться</a>
</div>
<?
	include "main_footer.php";
?>
