	<h3 class="h3">Все заказы</h3>
	<table>
		<tr>
			<td>Заказчик</td>
			<td>Продукт</td>
			<td>Описание</td>
			<td>Тип рекламы</td>
			<td>Статус заказа</td>
		</tr>

	<?
		include "connect.php";
		$manager = $_SESSION["auth_user"];
		$order_condition = mysql_query("SELECT * FROM order_condition");
		while ($value = mysql_fetch_array($order_condition)) {
			echo '
				<tr>
					<td>'.$value[1].'<br>'.$value[2].'</td>
					<td>'.$value[3].'</td>
					<td>'.$value[4].'</td>
					<td>'.$value[5].'</td>
					<td>'.$value[18].'</td>
					<td class="btn">
						<form method="post" action="details_about_ordering.php">
							<input type="hidden" value="'.$value[0].'" name="order_id">
							<input type="image" src="img/info.png" width="20">
						</form>
					</td>
				</tr>
			';
		}
	?>
	</table>