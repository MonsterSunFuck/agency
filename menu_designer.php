<style type="text/css">
	.h3{
		padding: 0 0 20px 50px;
		margin: 0;
		height: 25px;
		font: 20px Helvetica;
	}
	table{
		text-align: center;
	}
	td{
		padding: 5px 10px;
		border: 1px solid;
	}
	.btn{
		padding: 5px 10px;
		border: 0;
		width: 20px;
	}
</style>
<div id="menu_guest">
<?/*
	<ul>
		<li>
			<a href="index.php">Главная</a>
		</li>
		<li>
			<a href="javascript:void(0)" onclick="AjaxRequest ('show_data', 'main_about.php');"">О нас</a>
		</li>
		<li>
			<a href="javascript:void(0)" onclick="AjaxRequest ('show_data', 'main_contact.php');"">Контакты</a>
		</li>
		<li>
			<a href="login.php">Регистрация</a>
		</li>
	</ul>*/
?>
</div>
<div id="show_data">
	<h3 class="h3">Новые заказы</h3>
	<table>
		<tr>
			<td>Заказчик</td>
			<td>Продукт</td>
			<td>Описание</td>
			<td>Тип рекламы</td>
			<td>Размеры</td>
			<td>Единица<br>измерения</td>
			<td>Статус заказа</td>
		</tr>

	<?
		include "connect.php";
		$order_consider = mysql_query("SELECT * FROM order_consider");
		while ($value = mysql_fetch_array($order_consider)) {
			echo '
				<tr>
					<td>'.$value[1].'<br>'.$value[2].'</td>
					<td>'.$value[3].'</td>
					<td>'.$value[4].'</td>
					<td>'.$value[5].'</td>
					<td>'.$value[6].'</td>
					<td>'.$value[7].'</td>
					<td>'.$value[8].'</td>
					<td class="btn">
						<input type="image" src="img/edit.png" width="20">
					</td>
				</tr>
			';
		}
	?>
	</table>
</div>