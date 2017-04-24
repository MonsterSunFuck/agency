<?
	include "connect.php";

	$order_statuses = mysql_query("SELECT * FROM order_statuses");
	while($value = mysql_fetch_array($order_statuses)){
		echo '
				<form method="post" action="order_statuses_edit.php">
					<input type="text" name="name" value="'.$value[1].'">
					<input type="submit" name="id" value="'.$value[0].'">
				</form><br>
		';
	}

?>