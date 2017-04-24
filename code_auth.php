<?
	session_start();
	header("Content-Type:text/html;charset=utf-8");
	include "connect.php";

	if(isset($_POST["enter"])){
		$login = $_POST["login"];
		$pass = $_POST["epass"];

		$query=mysql_query("SELECT * FROM take_auth WHERE login='$login'");
		$users = mysql_fetch_array($query);
		if($users){
			
			if($users['password'] == md5($pass) || $users['password'] == $pass){
				$_SESSION["name_user"] = $users["name"] . " " . $users["patronymic"];
				$_SESSION["access"] = $users["eng_name"];
				$_SESSION["auth_user"] = $users["id"];
				//echo '<script>alert('.$_SESSION["auth_user"].');</script>';
				
				//include_once "index.php";
			}
		}
		else{
			echo '<script>alert("Такой пользователь не зарегистрирован.");</script>';
			include_once "login.php";
		}
	}

	if(isset($_POST["logout"])){
		unset($_SESSION["user"]);
		session_destroy();
	}
	echo '<script>window.location.href = "index.php";</script>';
?>
