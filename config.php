<?php

	global $op;
	
	$db_user = "u547639049_kmk";
	$db_db = "u547639049_kmk";
	$db_host = "mysql.idhostinger.com";
	$db_pass = "kmkitbchoir";
	$db_home = "http://www.kmkitbchoir.org";
	
	if($_SERVER["SERVER_NAME"]=="localhost"){
	    $db_user = "rio";
		$db_db = "kmk";
		$db_host = "localhost";
		$db_pass = "5409333";
		$db_home = "";
	}
	
	$op = new mysqli($db_host,$db_user,$db_pass,$db_db);
	
	if(mysqli_connect_errno()){
		echo "Connect failed <br/>";
		echo mysqli_connect_error();
	}
	
?>