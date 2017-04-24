<div id="menu_admin">
	<ul>
		<li>
			<a href="index.php">Главная</a>
		</li>
		
		<li>
			<a  href="javascript:void(0)" onclick="AjaxRequest ('show_data', 'f_clients.php');">Клиенты</a>
		</li>
		<li>
			<a href="javascript:void(0)" onclick="AjaxRequest ('show_data', 'f_staff.php');">Сотрудники</a>
		</li>
		<!--
		<li>
			<a "javascript:void(0)" onclick="AjaxRequest ('show_data', 'f_orders.php');">Заказы</a>
		</li>
		-->
		
		<li>
			<a href="javascript:void(0)" onclick="AjaxRequest ('show_data', 'f_create_order.php');">Сделать заказ</a>
		</li>
		
	</ul>
</div>
<div id="show_data">
	<table>
	<tr>
		<td>
			<!-- управление заказами/клиентами -->
			<div id="mancas">
				<h3 class="h"></h3>
				<p class="textlink1">Dimenstions</p>
				<a class="textlink2" href="javascript:void(0)" onclick="AjaxRequest ('show_data', 'dimensions.php');">Добавить/Изменить</a>
				<br><br>
				<p class="textlink1">Advertising types</p> 
				<a class="textlink2" href="javascript:void(0)" onclick="AjaxRequest ('show_data', 'advertising_types.php');">Добавить/Изменить</a>
			</div>
			<!-- анализ деятельности -->
			<div id="analysis">
				<h3 class="h">Данные компании</h3>
				<p class="textlink1">Order statuses</p>
				<a class="textlink2" href="javascript:void(0)" onclick="AjaxRequest ('show_data', 'order_statuses.php');">Добавить/Изменить</a>
				<br><br>
				<p class="textlink1">User statuses</p> 
				<a class="textlink2" href="javascript:void(0)" onclick="AjaxRequest ('show_data', 'user_statuses.php');">Добавить/Изменить</a>
				<br><br>
				<p class="textlink1">Должности</p> 
				<a class="textlink2" href="javascript:void(0)" onclick="AjaxRequest ('show_data', 'post.php');">Добавить/Изменить</a>
			</div>
		</td>
		<td>
			<!-- управление материалами -->
			<div id="products">
				<h3 class="h">Управление данными заказов</h3>
				<p class="textlink1">Посмотреть все заказы</p> 
				<a class="textlink2" href="javascript:void(0)" onclick="AjaxRequest ('show_data', 'f_orders.php');">Добавить/Изменить</a>
				<br><br>
				<p class="textlink1">Продукты</p> 
				<a class="textlink2" href="javascript:void(0)" onclick="AjaxRequest ('show_data', 'f_products.php');">Добавить/Изменить</a>
				<br><br>
				<p class="textlink1">Материалы</p> 
				<a class="textlink2" href="javascript:void(0)" onclick="AjaxRequest ('show_data', 'f_materials.php');">Добавить/Изменить</a>
				<br>
				<h3 class="h">Справочники</h3>
					<p class="textlink1">Типы рекламы</p> 
					<a class="textlink2" href="javascript:void(0)" onclick="AjaxRequest ('show_data', 'f_promo_types.php');">Добавить/Изменить</a>
					<br><br>
					<p class="textlink1">Статусы пользователей</p> 
					<a class="textlink2" href="javascript:void(0)" onclick="AjaxRequest ('show_data', 'f_user_statuses.php');">Добавить/Изменить</a>
					<br><br>
					<p class="textlink1">Статусы заказов</p> 
					<a class="textlink2" href="javascript:void(0)" onclick="AjaxRequest ('show_data', 'f_order_statuses.php');">Добавить/Изменить</a>
			</div>
		</td>
	</tr>
</table>
</div>