<div class="form_add">
	<h3 class="h">Добавить материал</h3>
	<form method="post" action="add_data.php">
		<select class="txtbx" name="type_id">
			<?
				include "connect.php";
				$req = mysql_query("SELECT * FROM material_types");
				while($value = mysql_fetch_array($req)){
					echo '
						<option value="'.$value[0].'">'.$value[1].'</option>
					';
				}
			?>
		</select><br>
		<input class="txtbx" type="text" name="name" placeholder="Название"><br>
		<input class="txtbx" type="text" name="supplier" placeholder="Поставщик"><br>
		<input class="txtbx" type="text" name="cost" placeholder="Стоимость"><br>
		<input class="txtbx" type="text" name="in_stock" placeholder="На складе"><br>
		<input class="txtbx" type="text" name="reserve" placeholder="В резерве"><br>
		<input class="txtbx" type="submit" name="materials" value="Добавить">
		<input type="hidden" name="table" value="materials">	
	</form>
</div>
<div class="show_table">
	<h3 class="h">Таблица: Материалы</h3>
	<table>
		<tr>
			<td class="first">Тип материала</td>
			<td class="column">Название</td>
			<td class="column">Поставщик</td>
			<td class="column">Стоимость</td>
			<td class="column">На скаладе</td>
			<td class="column">В резерве</td>
		</tr>
		<?
			include "connect.php";
			$req = mysql_query("SELECT m.id, m2.name, m.name, supplier, cost, in_stock, reserve FROM materials m JOIN material_types m2 on m.type_id = m2.id");
			while($value = mysql_fetch_array($req)){
				echo '
					<tr>
						<td class="first">'.$value[1].'</td>
						<td class="column">'.$value[2].'</td>
						<td class="column">'.$value[3].'</td>
						<td class="column">'.$value[4].'</td>
						<td class="column">'.$value[5].'</td>
						<td class="column">'.$value[6].'</td>
						<td>
							<form method="post" action="form_edit.php">
								<input type="image" src="img/edit.png" width="20">
								<input type="hidden" name="id" value="'.$value[0].'">
								<input type="hidden" name="table" value="materials">
							</form>
						</td>
						<td>
							<form method="post" action="delete_data.php">
								<input type="image" src="img/del.png" width="20"> 
								<input type="hidden" name="id" value="'.$value[0].'">
								<input type="hidden" name="table" value="materials">
							</form>
						</td>
					</tr>
				';
			}
		?>
	</table>
</div>
