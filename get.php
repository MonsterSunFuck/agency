<?php
//Списко стран - городов 
require('list.php');

//Принимаем POST данные
$type = $_POST["type"];
$size = intval($_POST["size"]);
$act = $_POST["act"];

//Получения списка размеров типов рекламы
$dimensions = mysql_fetch_array(mysql_query("SELECT * FROM dimensions"));

switch($act){
	//Cтавим страну и возвращаем города
	case "get_size":
		$all_size = '<option value="0">Выберите размер</option>';
		foreach($dimensions as $dimension)
			if($dimension["type_advertising"] == $type) 
					$all_sizes .= '<option value="'.$dimension['id'].'">'.$dimension["width"].'x'.$dimension["height"].'</option>';
		echo $all_sizes;
		exit();
	break;
	//Cтавим город
	case "set_size":
		setcookie("size", $size, time()+3600);
		exit();
	break;
}


?>