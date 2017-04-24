<?
	session_start();
	include "connect.php";

	$id = $_POST["id"];
	$advertiser = $_POST["advertiser"];
	$surname = $_POST["surname"];
	$name = $_POST["name"];
	$patronymic = $_POST["patronymic"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$login = $_POST["login"];
	$old_password = $_POST["old_password"];
	$new_password = $_POST["new_password"];
	$check_password = $_POST["check_password"];

	$birthday = $_POST["birthday"];
	$address = $_POST["address"];
	$passport = $_POST["passport"];

	$query_password = mysql_fetch_array(mysql_query("SELECT password FROM users WHERE id=$id"));
	$user_password = $query_password["password"];
	if($new_password != '' && $check_password != ''){
		if($new_password == $check_password){
			if($user_password == $old_password || $user_password == md5($old_password)){
				$password = md5($new_password);
				$update_password_user = mysql_query("UPDATE users SET password='$password' WHERE id=$id");
			}
			else{
				echo '<script>alert("Не верно введен старый пароль.");</script>';
			}
		}
		else{
			echo '<script>alert("Не верно повторен новый пароль.");</script>';
		}
	}

	$update_users_data = mysql_query("UPDATE users SET surname='$surname', name='$name', patronymic='$patronymic', phone='$phone', email='$email', login='$login' WHERE id=$id");
	$_SESSION["name_user"] = $name . ' ' . $patronymic;

	if($_SESSION["access"] == 'client'){
		
		$update_clients_data = mysql_query("UPDATE clients SET advertiser='$advertiser' WHERE client_id=$id");
	}
	else{
		$update_staff_data = mysql_query("UPDATE staff SET birthday='$birthday', address='$address', passport='$passport' WHERE staff_id=$id");
		/*var_dump($update_staff_data);
		echo '<a href="index.php">Назад</a>';*/
	}
	

/*
	проверка работоспособности скрипта
	var_dump();
	echo '<br>';
	var_dump($update_users_data);
	echo '<br>';
	var_dump($update_clients_data);
*/
	echo '<script>window.location.href = "index.php";</script>';
?>