<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Рекламное Агенство</title>
	<link rel="stylesheet" type="text/css" href="style4.css">
	<link rel="stylesheet" type="text/css" href="style_for_image.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		function AjaxRequest(result_id,url){
			jQuery.ajax({
				url: url,
				type: "POST",
				dataType: "HTML",
				error: function(){
					alert("Connection error");
				},
				success: function(response){
					document.getElementById(result_id).innerHTML = response;
				}
			});
		}
	</script>
</head>
<body>
	<div id="header">
		<div id="logo">
			<a href="index.php"><img src="img/logo.png"></a>	
		</div>
		<div id="text1">
			<p>
				Ваш НАДЕЖНЫЙ ПАРТНЕР<br>
				по бизнесу в сфере<br>
				рекламных компаний
			</p>
		</div>
		<div id="autorise">

		<?
				
				if(isset($_SESSION["auth_user"])){
					echo '
						<form align="center" method="post" action="code_auth.php">
						<a>Здравствуйте,<br>'.$_SESSION["name_user"].'</a><br>';
						switch($_SESSION["access"]){
							case 'admin': 
								echo '<a>Вы администратор</a><br>';
								echo '<a href="javascript:void(0)" onclick="AjaxRequest (\'show_data\', \'user_data.php\');">Личный кабинет</a>';
								break;
							case 'client':
								echo '<a href="javascript:void(0)" onclick="AjaxRequest (\'show_data\', \'user_data.php\');">Личный кабинет</a>';
								break;
							case 'designer':
								echo '<a href="javascript:void(0)" onclick="AjaxRequest (\'show_data\', \'user_data.php\');">Личный кабинет</a>';	 
								break;
							case 'manager':
								echo '<a href="javascript:void(0)" onclick="AjaxRequest (\'show_data\', \'user_data.php\');">Личный кабинет</a>'; 
								break;
							case 'maker': 
								echo '<a href="javascript:void(0)" onclick="AjaxRequest (\'show_data\', \'user_data.php\');">Личный кабинет</a>';
								break;
						}
					echo '
						<br><input id="log" type="submit" name="logout" value="Выход">
						</form>';
				}
				else{
					echo '<a id="btn" href="login.php">Вход/Регистрация</a>'; 
				} 
			?>
			
		</div>
	</div>
