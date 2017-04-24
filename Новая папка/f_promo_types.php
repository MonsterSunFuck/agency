<div class="form_add">
	<h3 class="h">Добавить тип рекламы</h3>
	<form method="post" action="handbook.php">
		<input class="txtbx" type="text" name="name" placeholder="Тип рекламы"><br>
		<input class="txtbx" type="submit" name="promo_types" value="Добавить">
		<input type="hidden" name="table" value="promo_types">	
	</form>
</div>
<div class="show_table">
	<h3 class="h">Справочник: Тип рекламы</h3>
	<table>
		<tr>
			<td class="first">Тип рекламы</td>
		</tr>
		<?
			include "connect.php";
			$req = mysql_query("SELECT * FROM promo_types");
			while($value = mysql_fetch_array($req)){
				echo '
					<tr>
						<td class="first" data-id="' . $value[0] . '" data-table="promo_types">'.$value[1].'</td>
						<td>
							<input onclick="changeElement(this);" type="image" src="img/edit.png" width="20">
						</td>
						<td>
							<form method="post" action="delete_data.php">
								<input type="image" src="img/del.png" width="20"> 
								<input type="hidden" name="id" value="'.$value[0].'">
								<input type="hidden" name="table" value="promo_types">
							</form>
						</td>
					</tr>
				';
			}
		?>
	</table>
</div>