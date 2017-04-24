<style type="text/css">
	.h3{
		padding: 0 0 20px 50px;
		margin: 0;
		height: 25px;
		font: 20px Helvetica;
	}
	form{
		padding: 20px;
		text-align: left;
	}
	#create{
		display: none;
	}
</style>
<script type="text/javascript">
	function show_client(user, checked) {
		// body...
	}

</script>
<h3 class="h3">Оформление заявки</h3>
	<form method="post" action="">
		<input onclick="show_client();" type="radio" name="select_user" value="" checked> Выбрать клиента<br>
		<input onclick="show_client();" type="radio" name="create_user" value=""> Добавить клиента<br>
		<div id="select">
			<select class="withtext">	
				<option></option>
			<?
				include "connect.php";
				$take_client = mysql_query("SELECT * FROM take_client");
				while($value = mysql_fetch_array($take_client)){
					echo '
						<option value="'.$value[0].'">'.$value[1] .' '. $value[2] .' '. $value[3].'</option>
					';
				}
			?>
			</select>
		</div>
		<div id="create">
			<input class="withtext" type="text" name="name" placeholder="Имя" required ><br>
			<input class="withtext" type="text" name="phone" placeholder="Номер телефона" required><br>
			<input class="withtext" type="email" name="email" placeholder="E-mail" required><br>
		</div>
	</form>
	<form>
		<input type="image" name="img">
	</form>
