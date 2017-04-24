<?
	include "connect.php";

	$user_statuses = mysql_query("SELECT * FROM user_statuses");
	while($value = mysql_fetch_array($user_statuses)){
		echo '
				<form method="post" action="user_statuses.php">
					<input type="text" name="name" value="'.$value[1].'">
					<input type="submit" name="id" value="'.$value[0].'">
				</form><br>
		';
	}

	
	$id = $_POST["id"];
	$name = $_POST["name"];

	echo $name . '<br>';
	$update = mysql_query("UPDATE user_statuses SET name='$name' WHERE id=$id");
	echo '<a href="index.php">Назад</a>';

?>