<?
	include "connect.php";
	
	if($_POST["materials"]){
		$type_id = $_POST["type_id"];
		$supplier = $_POST["supplier"];
		$cost = $_POST["cost"];
		$in_stock = $_POST["in_stock"];
		$reserve = $_POST["reserve"];
		$req1 = mysql_query("SELECT * FROM materials WHERE type_id=$type_id && supplier='$supplier' && cost=$cost && in_stock=$in_stock && reserve=$reserve");
		$q = mysql_fetch_array($req1);
		if($q){
			echo '<script>alert("Ошибка. Нельзя дублировать данные!");</script>';
		}
		else{
			$req = mysql_query("INSERT INTO materials (type_id, name, supplier, cost, in_stock, reserve) VALUES ($type_id, '$name', '$supplier', $cost, $in_stock, $reserve)");
		}
		
	}
	else if(isset($_POST["clients"])){
		$surname = $_POST["surname"];
		$name = $_POST["name"];
		$patronymic = $_POST["patronymic"];
		$birthday = $_POST["birthday"];
		$phone = $_POST["phone"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$advertiser = $_POST["advertiser"];
		$user_status = $_POST["user_status"];

		$password = md5($password);

		$data_validation = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE surname='$surname' && name='$name && patronymic='$patronymic"));
		if(mysql_fetch_array($data_validation)){
			echo '<script>alert("Ошибка. Нельзя дублировать данные!");</script>';
		}
		else{
			$req2 = mysql_query("INSERT INTO users (surname, name, patronymic, birthday, phone, email, password, access) VALUES ('$surname', '$name', '$patronymic', '$birthday', '$phone', '$email', '$password', 'client') ");
			$client_id = mysql_insert_id();
			$req = mysql_query("INSERT INTO clients (client_id, advertiser, user_status) VALUES ($client_id, '$advertiser', $user_status)");
		}
		

	}
	else if(isset($_POST["posts"])){
		$job_title = $_POST["job_title"];
		$description = $_POST["description"];
		$wage = $_POST["wage"];
		
		$data_validation = mysql_query("SELECT * FROM posts WHERE job_title='$job_title'");
		if(mysql_fetch_array($data_validation)){
			echo '<script>alert("Ошибка. Нельзя дублировать данные!");</script>';
		}
		else{
			echo '<script>alert("Данные добавлены");</script>';
			$req = mysql_query("INSERT INTO posts (job_title, description, wage) VALUES ('$job_title', '$description', $wage)");
		}
		
	}
	else if(isset($_POST["staff"])){
		$surname = $_POST["surname"];
		$name = $_POST["name"];
		$patronymic = $_POST["patronymic"];
		$birthday = $_POST["birthday"];
		$phone = $_POST["phone"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$address = $_POST["address"];
		$passport = $_POST["passport"];
		$post_id = $_POST["post_id"];

		$password = md5($password);

		$data_validation = mysql_fetch_array(mysql_query("SELECT * FROM staff WHERE passport=$passport"));
		if($data_validation){
			echo '<script>alert("Ошибка. Нельзя дублировать данные!");</script>';
		}
		else{
			$req2 = mysql_query("INSERT INTO users (surname, name, patronymic, birthday, phone, email, password, access) VALUES ('$surname', '$name', '$patronymic', '$birthday', '$phone', '$email', '$password', 'client') ");
			$staff_id = mysql_insert_id();
			$req = mysql_query("INSERT INTO staff (staff_id, address, passport, post_id) VALUES ($staff_id, '$address', '$passport', $post_id)");
		}

	}
	else if(isset($_POST["orders"])){
		$title = $_POST["title"];
		$discription = $_POST["discription"];
		$count = $_POST["count"];
		$promo_type = $_POST["promo_type"];
		$paint = $_POST["paint"];
		$glue = $_POST["glue"];
		$print_material = $_POST["print_material"];

		$registration = $_POST["registration"];
		$plan_complited = $_POST["plan_complited"];
		$complited = $_POST["complited"];
		$status_work = $_POST["status_work"];
		$prepayment = $_POST["prepayment"];
		$cost = $_POST["cost"];
		$client_id = $_POST["client_id"];
		$employee_id = $_POST["employee_id"];

		$data_validation = mysql_query("SELECT * FROM products WHERE title='$title'");
		if(mysql_fetch_array($data_validation)){
			echo '<script>alert("Ошибка. Нельзя дублировать данные!");</script>';
		}
		else{
			$req2 = mysql_query("INSERT INTO products (title, discription, count, promo_type, paint, glue, print_material) VALUES ('$title', '$discription', $count, $promo_type, $paint, $glue, $print_material)");
			$product_id = mysql_insert_id();
			$req = mysql_query("INSERT INTO orders (product_id, registration, plan_complited, complited, status_work, prepayment, cost, client_id, employee_id) VALUES ($product_id, '$registration', '$plan_complited', '$complited', $status_work, $prepayment, $cost, $client_id, $employee_id)");

		}
	}
	else if(isset($_POST["client_order"])){
		$title = $_POST["title"];
		$discription = $_POST["discription"];
		$count = $_POST["count"];
		$promo_type = $_POST["promo_type"];
		$paint = $_POST["paint"];
		$glue = $_POST["glue"];
		$print_material = $_POST["print_material"];

		$registration = $_POST["registration"];
		$plan_complited = $_POST["plan_complited"];
		$status_work = $_POST["status_work"];
		$prepayment = $_POST["prepayment"];
		$client = $_POST["client"];

		$request = mysql_fetch_array(mysql_query("SELECT c.client_id FROM users u join clients c on u.id=c.client_id WHERE email = '$client'"));
		var_dump($request);
		$client_id = $request["client_id"];
		echo 'Client'.$client_id.'<br>';
		$data_validation = mysql_query("SELECT * FROM products WHERE title='$title'");
		if(mysql_fetch_array($data_validation)){
			echo '<script>alert("Ошибка. Нельзя дублировать данные!");</script>';
		}
		else{
			$req2 = mysql_query("INSERT INTO products (title, discription, count, promo_type, paint, glue, print_material) VALUES ('$title', '$discription', $count, $promo_type, $paint, $glue, $print_material)");
			$product_id = mysql_insert_id();
			//echo $product_id . '<br>';
			echo $product_id.', '.$registration.', '.$plan_complited.', '.$status_work.', '.$prepayment. ', '. $client_id .'<br>';
			$req = mysql_query("INSERT INTO orders (product_id, registration, plan_complited, status_work, prepayment, client_id, employee_id) VALUES ($product_id, '$registration', '$plan_complited', $status_work, $prepayment, $client_id, 1)");
			var_dump($req);

		}
	}
	if(!$req){
		echo '<script>alert("Произошла ошибка");</script>';
	}
	//echo '<script>window.location.href = "index.php";</script>';
?>