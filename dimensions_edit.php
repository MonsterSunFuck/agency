<?
	include "connect.php";

	$id = $_POST["id"];
	$name = $_POST["name"];
	$unit = $_POST["unit"];

	echo $name . ' и ' . $unit . '<br>';
	$update = mysql_query("UPDATE dimensions SET name='$name', unit='$unit' WHERE id=$id");

	
	echo '<a href="dimensions.php">Назад</a>';


?>