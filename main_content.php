<div id="content">
	<?
		if(isset($_SESSION["access"])){
			switch($_SESSION["access"]){
				case 'admin': 
					include_once "menu_admin.php";
					break;
				case 'client':
					include_once "menu_client.php";
					break;
				case 'designer': 
					include_once "menu_designer.php";
					break;
				case 'manager': 
					include_once "menu_manager.php";
					break;
				case 'maker': 
					include_once "menu_maker.php";
					break;
			}
		}
		else{
			include_once "menu_guest.php";
		}
	?>	
</div>