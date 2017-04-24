<?php
	$dbhost="localhost";
	$dbname="agency";
	$dbuser="root";
	$dbpass="123";
	$dbconn=mysql_connect($dbhost,$dbuser,$dbpass);
	if(!$dbconn) die ("Нет подключения ");

	$dbselect=mysql_select_db($dbname);
	if(!$dbname)die("Error");

?>