<div class="form_add">
	<h3 class="h">Добавить статус выполнения работы</h3>
	<form method="post" action="handbook.php">
		<input class="txtbx" type="text" name="name" placeholder="Статус выполнения работы"><br>
		<input class="txtbx" type="submit" name="order_statuses" value="Добавить">
		<input type="hidden" name="table" value="order_statuses">	
	</form>
</div>
<div class="show_table">
	<h3 class="h">Справочник: Статус выполнения работы</h3>
	<table>
		<tr>
			<td class="first">Статус выполнения работы</td>
		</tr>
		<?
			include "connect.php";
			$req = mysql_query("SELECT * FROM order_statuses");
			while($value = mysql_fetch_array($req)){
				echo '
					<tr>
						<td class="first" data-id="' . $value[0] . '" data-table="order_statuses">'.$value[1].'</td>
						<td>
							<input onclick="changeElement(this);" type="image" src="img/edit.png" width="20">
						</td>
						<td>
							<form method="post" action="delete_data.php">
								<input type="image" src="img/del.png" width="20">  
								<input type="hidden" name="id" value="'.$value[0].'">
								<input type="hidden" name="table" value="order_statuses">
							</form>
						</td>
					</tr>
				';
			}
		?>
	</table>
</div>