<?
	include "connect.php";

	$table = $_POST["table"];
	$id = $_POST["id"];
	$name = $_POST["name"];

	$req = mysql_query(sprintf("UPDATE %s SET name = '%s' WHERE id = %d", $table, $name, $id));
	
	if(!$req){
		echo '<script>alert("Произошла ошибка");</script>';
	}
	echo '<script>window.location.href = "index.php";</script>';
?>