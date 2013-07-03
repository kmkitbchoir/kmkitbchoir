<?php

	global $db_user, $db_db, $db_host, $db_pass, $db_home;
	
	if($_SERVER["SERVER_NAME"]=="localhost"){
	    $db_user = "rio";
		$db_db = "kmk";
		$db_host = "localhost";
		$db_pass = "5409333";
		$db_home = "";
	}else{
		$db_user = "u195076330_rio";
		$db_db = "u195076330_kmk";
		$db_host = "mysql.your3host.com";
		$db_pass = "kmkchoir2013";
		$db_home = "http://www.kmkchoir.3area.info";
	}
	
?>