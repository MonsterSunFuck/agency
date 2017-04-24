<?
	include "connect.php";
?>
<style type="text/css">
	.order, .h3{
		text-align: center;
	}
	#ept{
		display: none;
	}
	.h3{
		padding-bottom: 20px;
		margin: 0;
		height: 25px;
		font: 20px Helvetica;
	}
	.msg{
		height: 20px;
		width: 250px;
		margin: 5px auto 10px;
	}
</style>
<h3 class="h3">Заполните форму заказа</h3>
<form class="order" method="post" action="create_order.php">
	<input class="withtext" type="text" name="p_name" value="" placeholder="Название продукта" required><br>
	<input class="withtext" type="text" name="discription" value="" placeholder="Описание продукта" required><br>
	<select class="withtext" name="type_advertising">
	<?
		$type_advertising = mysql_query("SELECT * FROM advertising_types");		
		while($value = mysql_fetch_array($type_advertising)){
			echo '
				<option value="'.$value[0].'">'.$value[1].'</option>
			';
		}
	?>
	</select><br>
	<p class="msg">Выберите формат</p>
	<select class="withtext" name="dimensions">
	<?
		$dimensions = mysql_query("SELECT * FROM dimensions");		
		while($value = mysql_fetch_array($dimensions)){
			echo '
				<option value="'.$value[0].'">'.$value[1]. ', ' .$value[3]. 'x' .$value[4]. ' ' .$value[5].'</option>
			';
		}
	?>
	</select><br>
	<p class="msg">Или укажите размеры</p>
	<input class="withtext" type="number" name="height" value="" placeholder="Высота" ><br>
	<input class="withtext" type="number" name="width" value="" placeholder="Ширина" ><br>
	<select class="withtext" type="text" name="unit" value="" placeholder="Единица измерения" required>
		<option>мм</option>
		<option>см</option>
		<option>м</option>
	</select><br>
	<input class="withtext" type="text" name="count_product" value="" placeholder="Количество экзмепляров" required=""><br>
	<input class="withtext" type="submit" name="client" value="Заказать">

</form>
