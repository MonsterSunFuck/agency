<?
	include "connect.php";
	
	$id = $_POST["id"];
	$name = $_POST["name"];

	echo $name . '<br>';
	$update = mysql_query("UPDATE order_statuses SET name='$name' WHERE id=$id");
	echo '<a href="index.php">Назад</a>';
?>