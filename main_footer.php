	<div id="footer">
		<p style="margin: 0 auto; padding-top: 16px; color: white; text-align: center;">
			Куросовой проект студента Тулюсева Ярослава группы ППр-13-1 (с) 2017 
		</p>
	</div>

	<script>
		function changeElement(el) {
			var changeEl = $(el).closest('tr').find('.first'),
				id = changeEl.data('id'),
				table = changeEl.data('table'),
				changeText = changeEl.text();

			changeEl.html('<form method="post" action="edit_handbook.php">' +
				'<input type="hidden" name="id" value="' + id + '" />' +
				'<input type="hidden" name="table" value="' + table + '" />' +
				'<input type="text" name="name" value="' + changeText + '" data-old-value="' + changeText + '" />' +
				'<input type="image" src="img/save.png" width="20"></form>');

			$(el).parent().html('<input onclick="cancelElement(this);" type="image" src="img/cancel.png" width="20">');
		}

		function cancelElement(el) {
			var changeEl = $(el).closest('tr').find('.first');

			changeEl.html(changeEl.find('input[type="text"]').data('old-value'));

			$(el).parent().html('<input onclick="changeElement(this);" type="image" src="img/edit.png" width="20">');
		}
	</script>
</body>
</html>