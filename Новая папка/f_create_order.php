<style type="text/css">
	#show_data{
		height: 700px;
	}
	.form_order{
		margin: 0 auto;
		width: 400px;
		float: center;
		text-align: center;
	}
	.txtbx{
		width: 250px;
	}
</style>
<?
	include "connect.php";
?>
<div class="form_order">
	<h3 class="h">Сделать заказ</h3>
	<form method="post" action="add_data.php">
		<input class="txtbx" type="text" name="title" placeholder="Название"><br>
		<textarea class="txtbx" type="text" name="discription" placeholder="Описание"></textarea><br>
		<input class="txtbx" type="text" name="count" placeholder="Количество"><br>
		<select class="txtbx" name="promo_type">
			<?
				
				$req = mysql_query("SELECT * FROM promo_types");
				while($value = mysql_fetch_array($req)){
					echo '
						<option value="'.$value[0].'">'.$value[1].'</option>
					';
				}
			?>
		</select><br>
		<select class="txtbx" name="paint">
			<?
				include "connect.php";
				$req = mysql_query("SELECT * FROM materials m join material_types mt on m.type_id=mt.id WHERE mt.name='Краска'");
				while($value = mysql_fetch_array($req)){
					echo '
						<option value="'.$value[0].'">'.$value[2].'</option>
					';
				}
			?>
		</select><br>
		<select class="txtbx" name="glue">
			<?
				
				$req = mysql_query("SELECT * FROM materials m join material_types mt on m.type_id=mt.id WHERE mt.name='Клей'");
				while($value = mysql_fetch_array($req)){
					echo '
						<option value="'.$value[0].'">'.$value[2].'</option>
					';
				}
			?>
		</select><br>
		<select class="txtbx" name="print_material">
		<?
			
			$req = mysql_query("SELECT * FROM materials m join material_types mt on m.type_id=mt.id WHERE mt.name='Печатные материалы'");
			while($value = mysql_fetch_array($req)){
				echo '
					<option value="'.$value[0].'">'.$value[2].'</option>
				';
			}
		?>
		</select><br>
		<input class="txtbx" type="date" name="registration" placeholder="Дата заявки"><br>
		<input class="txtbx" type="date" name="plan_complited" placeholder="План выполнения"><br>
		<input class="txtbx" type="date" name="complited" placeholder="Дата выполнения"><br>
		<select class="txtbx" name="status_work">
		<?
			
			$req = mysql_query("SELECT * FROM order_statuses");
			while($value = mysql_fetch_array($req)){
				echo '
					<option value="'.$value[0].'">'.$value[1].'</option>
				';
			}
		?>
		</select><br>
		<input class="txtbx" type="text" name="prepayment" placeholder="Доля предоплаты"><br>
		<input class="txtbx" type="text" name="cost" placeholder="Стоимость"><br>
		<select class="txtbx" name="client_id">
		<?
			
			$req = mysql_query("SELECT id, advertiser FROM clients");
			while($value = mysql_fetch_array($req)){
				echo '
					<option value="'.$value[0].'">'.$value[1].'</option>
				';
			}
		?>
		</select><br>
		<select class="txtbx" name="employee_id">
		<?
			include "connect.php";
			$req = mysql_query("SELECT s.id, u.surname  FROM staff s join users u on s.staff_id=u.id");
			while($value = mysql_fetch_array($req)){
				echo '
					<option value="'.$value[0].'">'.$value[1].'</option>
				';
			}
		?>
		</select><br>
		<input class="txtbx" type="submit" name="orders" value="Добавить">
	</form>
</div>