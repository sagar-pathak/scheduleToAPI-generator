<?php
	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "root";
	$db_name = "nlss";
	$con = mysql_connect($db_host, $db_user, $db_pass);
	if(!$con){
		die("Couln't establish database connection. Please check your config file.");
	}else{
		mysql_select_db($db_name);
	}
?>