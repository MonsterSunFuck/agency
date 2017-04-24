<style type="text/css">

	.h3{
		padding: 0 0 20px 50px;
		margin: 0;
		height: 25px;
		font: 20px Helvetica;
	}
	table{
		
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
	li a{
		width: 225px;
	}
</style>
<div id="menu_guest">
	<ul>
		<li>
			<a href="javascript:void(0)" onclick="AjaxRequest ('show_data', 'create_order(staff).php');"">Оформить заказ</a>
		</li>
		<li>
			<a href="javascript:void(0)" onclick="AjaxRequest ('show_data', 'view_orders.php');"">Состояние заказов</a>
		</li>
		<?/*
		<li>
			<a href="login.php">Регистрация</a>
		</li>
		*/?>
	</ul>
</div>
<div id="show_data">
<?
	
?>
</div>