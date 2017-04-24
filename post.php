<?
	include "connect.php";

	$posts = mysql_query("SELECT * FROM posts");
	while($value = mysql_fetch_array($posts)){
		echo '
				<form method="post" action="post.php">
					<input type="text" name="job_title" value="'.$value[1].'">
					<input type="text" name="discription" value="'.$value[2].'">
					<input type="submit" name="id" value="'.$value[0].'">
				</form><br>
		';
	}

	
	$id = $_POST["id"];
	$job_title = $_POST["job_title"];
	$discription = $_POST["discription"];

	echo $job_title . '<br>' . $discription . '<br>';
	$update = mysql_query("UPDATE posts SET job_title='$job_title', discription='$discription' WHERE id=$id");
	echo '<a href="index.php">Назад</a>';

?>