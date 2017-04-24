<?
	session_start();
	include "connect.php";
	include "main_header.php";

?>
<style type="text/css">
	.h3{padding: 0 0 20px 50px;margin: 0;height: 25px;font: 20px Helvetica;}
	td{padding: 5px 10px;border: 1px solid;}
	.btn{padding: 5px 10px;border: 0;width: 20px;}
	li a{width: 225px;}
	.order_condition{text-align: center;}
	.msg{height: 20px;width: 250px; margin: 5px auto 10px;}
	.check{height: 20px; width: 20px;}
</style>
<div id="content">
	<div id="menu_guest">
		<ul>
			<li>
				<a href="javascript:void(0)" onclick="AjaxRequest ('show_data', 'create_order(staff).php');"">Оформить заказ</a>
			</li>
			<li>
				<a href="javascript:void(0)" onclick="AjaxRequest ('show_data', 'view_orders.php');"">Состояние заказов</a>
			</li>
		</ul>
	</div>
	<div id="show_data">
<?
	$manager = $_SESSION["auth_user"];
	$order_id = $_POST["order_id"];
	$order_condition = mysql_query("SELECT * FROM order_condition WHERE id=$order_id");
	$type_advertising = mysql_query("SELECT * FROM advertising_types");
	$dimensions = mysql_query("SELECT * FROM dimensions");
	$unit = mysql_query("SELECT id, unit FROM dimensions");
	$order_statuses = mysql_query("SELECT * FROM order_statuses");
	$value = mysql_fetch_array($order_condition);
		echo '
			<form class="order_condition" method="post" action="edit_order.php">
				<input class="withtext" value="'.$value[1].'" placeholder="Имя клиента" title="Имя клиента" readonly><br>
				<input class="withtext" name="client_phone" value="'.$value[2].'" placeholder="Номер клиента" title="Номер клиента"><br>
				<input class="withtext" name="product_name" value="'.$value[3].'" placeholder="Название заказа" title="Название заказа"><br>
				<input class="withtext" name="discription" value="'.$value[4].'" placeholder="Описание заказа" title="Описание заказа"><br>
				<select class="withtext" name="type_advertising">
				';
				while($type = mysql_fetch_array($type_advertising)){
					if($type[1] == $value[5]){
						echo '<option value="'.$type[0].'" selected>'.$type[1].'</option>';
					}
					else{
						echo '<option value="'.$type[0].'">'.$type[1].'</option>';
					}
				}
		echo '
				</select><br>
				<select class="withtext" name="dimension">';
				while($dimension = mysql_fetch_array($dimensions)){
					if(($dimension[3].'x'.$dimension[4]) == $value[6]){
						echo '<option value="'.$dimension[0].'" selected>'.$dimension[3].'x'.$dimension[4].'</option>';
					}
					else{
						echo '<option value="'.$dimension[0].'">'.$dimension[3].'x'.$dimension[4].'</option>';
					}
				}
		echo '
				</select><br>
				<select class="withtext" name="unit">';
				while($un = mysql_fetch_array($unit)){
					if($un[1] == $value[7]){
						echo '<option value="'.$un[0].'" selected>'.$un[1].'</option>';
					}
					else{
						echo '<option value="'.$un[0].'">'.$un[1].'</option>';
					}
				}
		echo '
				</select><br>
				<input class="withtext" type="hidden" name="" value="'.$value[8].'" placeholder="Менеджер" title="Менеджер">
				<input class="withtext" name="" value="'.$value[9].'" placeholder="Дизайнер" title="Дизайнер" readonly><br>
				<input class="withtext" name="" value="'.$value[10].'" placeholder="Телефон дизайнера" title="Телефон дизайнера" readonly><br>
				';
				if($value[11] == 1){
					echo '<input class="withtext" type="" name="" value="Дизайн готов" placeholder="" title="Готовность дизайна" readonly>';
				}
				else{
					echo '<input class="withtext" type="" name="" value="В разработке" placeholder="" title="Готовность дизайна" readonly>';
				}
				
		echo '
				<br>
				<input class="withtext" name="" value="'.$value[12].'" placeholder="Изготовитель" title="Изготовитель" readonly><br>
				<input class="withtext" name="" value="'.$value[13].'" placeholder="Телефон изготовителя" title="Телефон изготовителя" readonly><br>
				<input class="withtext" name="" value="'.$value[14].'" placeholder="" title="Ставка за работу" readonly><br>
				<input class="withtext" name="" value="'.$value[15].'" placeholder="Предоплата" title="Предоплата"><br>
				<input class="withtext" name="" value="'.$value[16].'" placeholder="Стоимость" title="Стоимость"><br>
				<p class="msg">Статус оплаты</p>
				';
				if($value[17] == 1){
					echo '<input class="check" type="checkbox" checked >';
				}
				else{
					echo '<input class="check" type="checkbox" >';
				}
				
		echo '
				<br>
				<select class="withtext" name="work_status">';
				while($status = mysql_fetch_array($order_statuses)){
					if($status[1] == $value[18]){
						echo '<option value="'.$status[0].'" selected>'.$status[1].'</option>';
					}
					else{
						echo '<option value="'.$status[0].'">'.$status[1].'</option>';
					}
				}
		echo '
				</select><br>
				<input type="hidden" value="'.$value[0].'" name="order_id">
				<input class="withtext" type="submit" value="Изменить">
			</form>
		';
?>
	</div>
</div>

<?
	include "main_footer.php";
?>