<?
	session_start();
	include "connect.php";

	if(isset($_POST["reg"])){
		$name = $_POST["name"];
		$phone = $_POST["phone"];
		$email = $_POST["email"];
		$login = $_POST["login"];
		$pass = $_POST["pass"];
		$passtwo = $_POST["passtwo"];

		if($pass == $passtwo){
			$req = mysql_query("SELECT email FROM users WHERE email = '$email'");
			$arr = mysql_fetch_assoc($req);
			if($arr == ""){
				$pass = md5($pass);
				$successLog = mysql_query("INSERT INTO users (name, phone, email, login, password, status) VALUES ('$name', '$phone', '$email', '$login', '$pass', 2) ");
				$client_id = mysql_insert_id();
				$add_client = mysql_query("INSERT INTO clients (client_id, status) VALUES ($client_id, 'Активен')");
				if($add_client){
					$query=mysql_query("SELECT * FROM take_auth WHERE id=$client_id");
					$users = mysql_fetch_array($query);

					$_SESSION["name_user"] = $users["name"];
					$_SESSION["access"] = $users["eng_name"];
					$_SESSION["auth_user"] = $users["id"];
					echo '<script>window.location.href = "index.php";</script>';
				}
				else{
					echo '<script>alert("Извините, произшла ошибка");</script>';
				}
			}
			else{
				echo '<script>alert("Этот e-mail уже зарегистрирован!");</script>';
				include_once "login.php";
			}

			if(isset($_POST["logout"])){
				unset($_SESSION["user"]);
				session_destroy();
			}
			
		}
		else{
			echo '<script>alert("Вы не правильно повторили пароль!");</script>';
			include_once "login.php";
		}
	}

?>