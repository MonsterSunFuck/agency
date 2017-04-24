<?
	include "connect.php";

	$advertising_types = mysql_query("SELECT * FROM advertising_types");
	while($value = mysql_fetch_array($advertising_types)){
		echo '
				<form method="post" action="advertising_types.php">
					<input type="text" name="name" value="'.$value[1].'">
					<input type="submit" name="id" value="'.$value[0].'">
				</form><br>
		';
	}

	$id = $_POST["id"];
	$name = $_POST["name"];

	echo $name . '<br>';
	$update = mysql_query("UPDATE advertising_types SET name='$name' WHERE id=$id");
	echo '<a href="advertising_types.php">Назад</a>';

?>