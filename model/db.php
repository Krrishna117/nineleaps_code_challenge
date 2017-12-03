<?php
	$user="root";
	$password="";
	$db="nineleaps_db";
	mysql_connect("localhost",$user,$password) or die(mysql_error());
	mysql_select_db($db) or die (mysql_error());
?>