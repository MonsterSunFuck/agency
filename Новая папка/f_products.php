<style type="text/css">
	#show_data{
		height: 500px;
	}

</style>
<!--
<div class="form_add">
	<h3 class="h">Добавить продукт</h3>
	<form method="post" action="add_data.php">
		<input class="txtbx" type="text" name="title" placeholder="Название"><br>
		<textarea class="txtbx" type="text" name="discriiption" placeholder="Описание"></textarea><br>
		<input class="txtbx" type="text" name="count" placeholder="Количество"><br>
		<select class="txtbx" name="promo_type">
			<?
				include "connect.php";
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
				include "connect.php";
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
			include "connect.php";
			$req = mysql_query("SELECT * FROM materials m join material_types mt on m.type_id=mt.id WHERE mt.name='Печатные материалы'");
			while($value = mysql_fetch_array($req)){
				echo '
					<option value="'.$value[0].'">'.$value[2].'</option>
				';
			}
		?>
		</select><br>
		<input class="txtbx" type="submit" name="products" value="Добавить">
		<input type="hidden" name="table" value="products">	
	</form>
</div>
-->
<div class="show_table">
	<h3 class="h">Таблица: Продукты</h3>
	<table>
		<tr>
			<td class="first">Название</td>
			<td class="column">Описание</td>
			<td class="column">Количество</td>
			<td class="column">Тип рекламы</td>
			<td class="column">Краска</td>
			<td class="column">Клей</td>
			<td class="column">Печатные материалы</td>
		</tr>
		<?
			include "connect.php";
			$req = mysql_query("SELECT p.id, title, discription, count, pt.name, m1.name, m2.name, m3.name FROM products p join materials m1 on p.paint=m1.id join materials m2 on p.glue=m2.id join materials m3 on p.print_material=m3.id join promo_types pt on p.promo_type=pt.id");
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
						<td>
						<td>
							<form method="post" action="form_edit.php">
								<input type="image" src="img/edit.png" width="20">
								<input type="hidden" name="id" value="'.$value[0].'">
								<input type="hidden" name="table" value="products">
							</form>
						</td>
					</tr>
				';
			}
		?>
	</table>
</div>
