<?
	include "connect.php";

	$id = $_POST["id"];
	$name = $_POST["name"];

	echo $name . '<br>';
	$update = mysql_query("UPDATE arvertising_types SET name='$name' WHERE id=$id");
	echo '<a href="arvertising_types.php">Назад</a>';


?>