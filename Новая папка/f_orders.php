<style type="text/css">
	#show_data{
		height: 500px;
	}

</style>
<div class="show_table">
	<h3 class="h">Таблица: Заказы</h3>
	<table>
		<tr>
			<td class="first">Название</td>
			<td class="column">Дата заявки</td>
			<td class="column">Примерная дата<br>завершения</td>
			<td class="column">Дата завершения</td>
			<td class="column">Статус работы</td>
			<td class="column">Доля предоплаты</td>
			<td class="column">Стоимость</td>
			<td class="column">Клиент</td>
			<td class="column">Сотрудник</td>
		</tr>
		<?
			include "connect.php";
			$req = mysql_query("SELECT o.id, p.title, o.registration, o.plan_complited, o.complited, os.name, o.prepayment, o.cost, c.advertiser, u.surname, p.id 
								FROM orders o join products p on o.product_id=p.id
								join order_statuses os on o.status_work=os.id
								join clients c on o.client_id=c.id
								join staff s on o.employee_id=s.id
								join users u on s.staff_id=u.id");
			while($value = mysql_fetch_array($req)){
				echo '
					<tr>
						<td class="first">'.$value[1].'</td>
						<td class="column">'.$value[2].'</td>
						<td class="column">'.$value[3].'</td>
						<td class="column">'.$value[4].'</td>
						<td class="column">'.$value[5].'</td>
						<td class="column">'.$value[6].'</td>
						<td class="column">'.$value[7].'</td>
						<td class="column">'.$value[8].'</td>
						<td class="column">'.$value[9].'</td>
						<td>
							<form method="post" action="form_edit.php">
								<input type="image" src="img/edit.png" width="20">
								<input type="hidden" name="id" value="'.$value[0].'">
								<input type="hidden" name="table" value="orders">
							</form>
						</td>
						<td>
							<form method="post" action="delete_data.php">
								<input type="image" src="img/del.png" width="20"> 
								<input type="hidden" name="id" value="'.$value[0].'">
								<input type="hidden" name="product_id" value="'.$value[10].'">
								<input type="hidden" name="table" value="orders">
							</form>
						
						</td>
					</tr>
				';
			}
		?>
	</table>
</div>
