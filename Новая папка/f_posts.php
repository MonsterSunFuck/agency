<style type="text/css">
	.form_add{
		width: 300px;
	}
	.show_table{
		width: 800px;
	}
</style>
<div class="form_add">
	<h3 class="h">Добавить Должность</h3>
	<form method="post" action="add_data.php">
		
		<input class="withtext" type="text" name="job_title" placeholder="Должность"><br>
		<textarea class="withtextarea" type="text" name="description" placeholder="Описание"></textarea><br>
		<input class="withtext" type="text" name="wage" placeholder="Зарплата"><br>
		<input class="btn" type="submit" name="posts" value="Добавить">
		<input type="hidden" name="table" value="posts">	
	</form>
</div>
<div class="show_table">
	<h3 class="h">Таблица: Должности</h3>
	<table>
		<tr>
			<td class="first">Должность</td>
			<td class="column">Описание</td>
			<td class="column">Зарплата</td>
		</tr>
		<?
			include "connect.php";
			$req = mysql_query("SELECT * FROM posts");
			while($value = mysql_fetch_array($req)){
				echo '
					<tr>
						<td class="first">'.$value[1].'</td>
						<td class="column">'.$value[2].'</td>
						<td class="column">'.$value[3].'</td>
						<td>
							<form method="post" action="form_edit.php">
								<input type="image" src="img/edit.png" width="20">
								<input type="hidden" name="id" value="'.$value[0].'">
								<input type="hidden" name="table" value="posts">
							</form>
						</td>
						<td>
							<form method="post" action="delete_data.php">
								<input type="image" src="img/del.png" width="20">
								<input type="hidden" name="id" value="'.$value[0].'">
								<input type="hidden" name="table" value="posts">
							</form>
						</td>
					</tr>
				';
			}
		?>
	</table>
</div>
