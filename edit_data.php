<?
	session_start();
	include "connect.php";

	$id = $_POST["id"];
	$table = $_POST["table"];

	switch ($table) {
		case 'posts':
			$job_title = $_POST["job_title"];
			$description = $_POST["description"];
			$wage = $_POST["wage"];
			
			$data_validation = mysql_query("SELECT * FROM $table WHERE job_title='$job_title', description='$description', wage=$wage");
			/*$check_result = mysql_fetch_array($data_validation);
			var_dump();*/
			if($data_validation){
				echo '<script>alert("Ошибка. Нельзя дублировать данные!");</script>';
			}
			else{
				$req = mysql_query("UPDATE $table SET job_title='$job_title', description='$description', wage=$wage WHERE id=$id");
			}
			break;
		case 'users':
			$surname = $_POST["surname"];
			$name = $_POST["name"];
			$patronymic = $_POST["patronymic"];
			$birthday = $_POST["birthday"];
			$phone = $_POST["phone"];
			$email = $_POST["email"];
			$new_password = $_POST["new_password"];
			$old_password = $_POST["old_password"];

			$password = (empty($new_password)) ? $old_password : md5($new_password);

			$data_validation = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE surname='$surname' && name='$name' && patronymic='$patronymic'"));
			var_dump($data_validation);
			if($data_validation){
				echo '<script>alert("Ошибка. Нельзя дублировать данные!");</script>';
			}
			else{
				
				$req = mysql_query("UPDATE $table SET surname='$surname', name='$name', patronymic='$patronymic', birthday='$birthday', phone='$phone', email='$email', password='$password' WHERE id=$id");
			}
			break;
		case 'staff':
			$surname = $_POST["surname"];
			$name = $_POST["name"];
			$patronymic = $_POST["patronymic"];
			$birthday = $_POST["birthday"];
			$phone = $_POST["phone"];
			$email = $_POST["email"];
			$address = $_POST["address"];
			$passport = $_POST["passport"];
			$post_id = $_POST["post_id"];

			$new_password = $_POST["new_password"];
			$old_password = $_POST["old_password"];

			$password = (empty($new_password)) ? $old_password : md5($new_password);

			$edit_user_staff = mysql_query("UPDATE users SET surname='$surname', name='$name', patronymic='$patronymic', birthday='$birthday', phone='$phone', email='$email', password='$password' WHERE id=$id");
			$edit_staff = mysql_query("UPDATE staff SET address='$address', passport='$passport', post_id=$post_id WHERE staff_id=$id");
			$req = $edit_staff;
			break;
		case 'materials':
			$type_id = $_POST["type_id"];
			$name = $_POST["name"];
			$supplier = $_POST["supplier"];
			$cost = $_POST["cost"];
			$in_stock = $_POST["in_stock"];
			$reserve = $_POST["reserve"];

			$req = mysql_query("UPDATE materials SET type_id=$type_id, name='$name', supplier='$supplier', cost=$cost, in_stock=$in_stock, reserve=$reserve WHERE id=$id");

			break;
		case 'clients':
			$surname = $_POST["surname"];
			$name = $_POST["name"];
			$patronymic = $_POST["patronymic"];
			$birthday = $_POST["birthday"];
			$phone = $_POST["phone"];
			$email = $_POST["email"];
			$advertiser = $_POST["advertiser"];
			$user_status = $_POST["user_status"];

			$new_password = $_POST["new_password"];
			$old_password = $_POST["old_password"];

			$password = (empty($new_password)) ? $old_password : md5($new_password);

			$edit_user_client = mysql_query("UPDATE users SET surname='$surname', name='$name', patronymic='$patronymic', birthday='$birthday', phone='$phone', email='$email', password='$password' WHERE id=$id");
			$edit_client = mysql_query("UPDATE clients SET advertiser='$advertiser', user_status=$user_status WHERE client_id=$id");

			echo $surname.', '.$name.', '.$patronymic.', '.$birthday.', '.$phone.', '.$email.', '.$password .', '. $id;
			$req = $edit_client;
			break;
		case 'products':
			$title = $_POST["title"];
			$discription = $_POST["discription"];
			$count = $_POST["count"];
			$promo_type = $_POST["promo_type"];
			$paint = $_POST["paint"];
			$glue = $_POST["glue"];
			$print_material = $_POST["print_material"];

			//echo $title.', '.$discription.', '.$count.', '.$promo_type.', '.$paint.', '.$glue.', '.$print_material.', '. $id;

			$edit_products = mysql_query("UPDATE products SET title='$title', discription='$discription', count=$count, promo_type=$promo_type, paint=$paint, glue=$glue, print_material=$print_material WHERE id=$id");
			$req = $edit_products;
			break;
		case 'orders':

			break;
	}
	if(!$req){
		echo '<script>alert("Произошла ошибка");</script>';
	}
	//echo '<script>window.location.href = "index.php";</script>';

?>