<table>
	<tr>
		<td>
			<!-- управление заказами/клиентами -->
			<div id="mancas">
				<h3 class="h">Работа с клиентами</h3>
				<p class="textlink1">Клиенты</p>
				<a class="textlink2" href="javascript:void(0)" onclick="AjaxRequest ('show_data', 'f_clients.php');">Добавить/Изменить</a>
				<br><br>
				<p class="textlink1">Оформить заказ</p> 
				<a class="textlink2" href="javascript:void(0)" onclick="AjaxRequest ('show_data', 'f_create_order.php');">Добавить/Изменить</a>
			</div>
			<!-- анализ деятельности -->
			<div id="analysis">
				<h3 class="h">Данные компании</h3>
				<p class="textlink1">Пользователи</p>
				<a class="textlink2" href="javascript:void(0)" onclick="AjaxRequest ('show_data', 'f_users.php');">Добавить/Изменить</a>
				<br><br>
				<p class="textlink1">Сотрудники</p> 
				<a class="textlink2" href="javascript:void(0)" onclick="AjaxRequest ('show_data', 'f_staff.php');">Добавить/Изменить</a>
				<br><br>
				<p class="textlink1">Должности</p> 
				<a class="textlink2" href="javascript:void(0)" onclick="AjaxRequest ('show_data', 'f_posts.php');">Добавить/Изменить</a>
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
					<p class="textlink1">Типы материалов</p> 
					<a class="textlink2" href="javascript:void(0)" onclick="AjaxRequest ('show_data', 'f_material_types.php');">Добавить/Изменить</a>
					<br><br>
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