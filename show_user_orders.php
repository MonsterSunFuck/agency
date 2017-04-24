<?
	session_start();
?>
<style type="text/css">
	.h3{
		padding: 0 0 20px 50px;
		margin: 0;
		height: 25px;
		font: 20px Helvetica;
	}
	.simple_data{
		text-align: center;
		padding-right: 5px;
		border: 0;
	}
	.simple_data .second{
		padding-left: 5px;
	}
	.simple{
		padding: 5px;
		border: 1px solid;
	}
</style>
<?
	include "connect.php";


	$id = $_SESSION["auth_user"];
	$user_orders = mysql_query("SELECT * FROM client_orders WHERE client=$id");

	echo '
		<h3 class="h3">Мои заказы</h3>
		<table class="simple_data">
			<tr>
				<td class="simple">Название</td>
				<td class="simple">Количество</td>
				<td class="simple">Описание</td>
				<td class="simple">Тип рекламы</td>
				<td class="simple">Размер</td>
				<td class="simple">Единица измерения</td>
				<td class="simple">Дизайн</td>
				<td class="simple">Предоплата</td>
				<td class="simple">Цена</td>
				<td class="simple">Статус оплаты</td>
				<td class="simple">Статус работы</td>
			</tr>';

	while($value = mysql_fetch_array($user_orders)){
		echo '
			<tr>
				<td>'.$value[2].'</td>
				<td>'.$value[3].'</td>
				<td>'.$value[4].'</td>
				<td>'.$value[5].'</td>
				<td>'.$value[6].'</td>
				<td>'.$value[7].'</td>
				<td>'; 	if($value[8] == 1){
							echo '<input type="checkbox" checked disabled>';
						}
						else{
							echo '<input type="checkbox" disabled>';
						}

				echo '</td>
				<td>'.$value[9].'</td>
				<td>'.$value[10].'</td>
				<td>'; 	if($value[11] == 1){
							echo '<input type="checkbox" checked disabled>';
						}
						else{
							echo '<input type="checkbox" disabled>';
						}

				echo '</td>
				<td>'.$value[12].'</td>
			</tr>';
	}

	echo '
		</table>

	';

?>