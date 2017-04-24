<?
	session_start();
	include "connect.php";

	$client = $_SESSION["auth_user"];
	$p_name = $_POST["p_name"];
	$discription = $_POST["discription"];
	$type_advertising = $_POST["type_advertising"];
	$dimensions = $_POST["dimensions"];
	$height = $_POST["height"];
	$width = $_POST["width"];
	$unit = $_POST["unit"];
	$count_product = $_POST["count_product"];

	if($height != "" && $width != ""){
		$existence_of_dimensions = mysql_query("SELECT id FROM dimensions WHERE height=$height && width=$width");
		if($existence_of_dimensions){
			$existence_of_dimensions = mysql_fetch_array($existence_of_dimensions);
			$dimension = $existence_of_dimensions[0];
		}
		else{
			$add_dimension = mysql_query("INSERT INTO dimensions (height, width, unit) VALUES ($height, $width, '$unit')");
			$dimension = mysql_insert_id();
		}
	}
	else{
		$dimension = $dimensions;
	}

	$add_product = mysql_query("INSERT INTO products (name, discription, type_advertising, dimension) VALUES ('$p_name', '$discription', $type_advertising, $dimension)");
	$product = mysql_insert_id(); 
	$add_client_order = mysql_query("INSERT INTO orders (client, product, count_product, manager, designer, maker, status_work) VALUES ($client, $product, $count_product, 1, 1, 1, 1)");

	echo $product .'<br>';
	if(!$add_client_order){
		echo '<script>alert("Извините, произошла ошибка.");</script>';
	}
	echo '<script>window.location.href = "index.php";</script>';

?>