<?
	include "connect.php";

	$dimensions = mysql_query("SELECT * FROM dimensions");
	while($value = mysql_fetch_array($dimensions)){
		echo '
				<form method="post" action="dimensions_edit.php">
					<input type="text" name="name" value="'.$value[1].'">
					<input type="text" name="type" value="'.$value[2].'">
					<input type="text" name="height" value="'.$value[3].'">
					<input type="text" name="width" value="'.$value[4].'">
					<input type="text" name="unit" value="'.$value[5].'">
					<input type="submit" name="id" value="'.$value[0].'">
				</form><br>
		';
	}

?>