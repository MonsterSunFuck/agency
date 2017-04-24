<?
	include "connect.php";

	$table = $_POST["table"];
	$id = $_POST["id"];
	switch ($table) {
		case 'staff':
			$take_id = mysql_fetch_array(mysql_query("SELECT id FROM staff WHERE staff_id=$id"));
			$s_id = $take_id[0];
			$delete = mysql_query("DELETE FROM orders WHERE employee_id=$s_id");
			$delete = mysql_query("DELETE FROM staff WHERE staff_id=$id");
			$delete = mysql_query("DELETE FROM users WHERE id=$id");
			break;
		case 'clients':
			$delete = mysql_query("DELETE FROM orders WHERE client_id=$id");
			$delete = mysql_query("DELETE FROM clients WHERE client_id=$id");
			$delete = mysql_query("DELETE FROM users WHERE id=$id");
			break;
		case 'orders':
			$product_id=$_POST["product_id"];
			$delete = mysql_query("DELETE FROM products WHERE id=$product_id");
			$delete = mysql_query("DELETE FROM orders WHERE id=$id");
			break;
		default:
			$delete = mysql_query("DELETE FROM $table WHERE id=$id");
			break;
	}
	
	if($delete){
		//echo '<script>alert("Данные успешно удалены.");</script>';
	}
	else{
		echo '<script>alert("Извините, произошла ошибка.");</script>';
	}
	
	//echo '<br><a href="index.php">назад</a>';
	echo '<script>window.location.href = "index.php";</script>';
?>