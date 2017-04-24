<?
	include "connect.php";
	$table = $_POST["table"];
	$name = $_POST["name"];

	$req = mysql_query("INSERT INTO $table (name) VALUES ('$name')");
	
	if(!$req){
		echo '<script>alert("Произошла ошибка");</script>';
	}
	echo '<script>window.location.href = "index.php";</script>';
?>