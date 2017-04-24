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
	$today = date('Y-m-d');
?>
<div class="form_order">
	<h3 class="h">Предварительный заказ</h3>
	<form method="post" action="add_data.php">
		<input class="txtbx" type="text" name="title" placeholder="Название"><br>
		<textarea class="txtbx" type="text" name="discriiption" placeholder="Описание"></textarea><br>
		<input class="txtbx" type="text" name="count" placeholder="Количество"><br>
		<input type="hidden" name="promo_type" value="1">
		<input type="hidden" name="paint" value="1">
		<input type="hidden" name="glue" value="1">		
		<input type="hidden" name="print_material" value="1">
		<p>Дата заявки</p>
		<?
		echo '<input class="txtbx" readonly type="date" name="registration" value="'.$today.'"><br>';?>
		<p>Когда нужно выполнить</p>
		<input class="txtbx" type="date" name="plan_complited" placeholder="План выполнения"><br>
		<input class="txtbx" type="hidden" name="status_work" value="1">
		<input class="txtbx" type="text" name="prepayment" placeholder="Доля предоплаты"><br>
		<input class="txtbx" type="text" name="client" value=""placeholder="Введите ваш email">
		<input class="txtbx" type="submit" name="client_order" value="Добавить">
	</form>
	<p>Стоимость будет согласована с вами лично, дождитесь звонка оператора</p>
</div>