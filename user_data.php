<?
	session_start();
?>
<style type="text/css"> 
	#ept{ 
		display: none; 
	} 
	.users_menu{ 
		padding: 20px 20px 20px 0; 
		width: 122px; 
		border-right: 3px solid orange; 
		float: left; 
	} 
	#users_data, .user_data_one, .user_data_two{ 
		padding: 0 25px 20px; 
		width: 950px; 
		float: left; 
	} 
	.user_data_two{ 
		display: none; 
	} 
	ul{ 
		margin: 0; 
		padding: 0; 
		list-style: none; 
		text-align: right; 
	} 
	ul li{ 
		padding-bottom: 5px; 
		height: 25px; 
	} 
</style> 
<div class="users_menu">
	<ul>
		<li>
			<a href="javascript:void(0)" onclick="AjaxRequest ('users_data', 'show_user_data.php');">Мои данные</a>
		</li>
		<?
			if($_SESSION["access"] == 'client'){
				echo '
					<li>
						<a href="javascript:void(0)" onclick="AjaxRequest (\'users_data\', \'show_user_orders.php\');">Мои заказы</a>
					</li>
				';
			}
		?>
	</ul>
</div>
<div id="users_data">
	<?
		include "show_user_data.php";
	?>
</div>

