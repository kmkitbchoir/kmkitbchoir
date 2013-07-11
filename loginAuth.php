<?php
	session_start();
    include_once("config.php");
	$op1 = mysqli_connect($db_host, $db_user, $db_pass);
	mysqli_select_db($op1, $db_db);
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	$password = md5($password);
	$sq1 = "
		SELECT role FROM user
		WHERE user='$username' AND pass='$password'
	";
	$re1 = mysqli_query($op1,$sq1);
	print mysqli_error($op1);
	if(mysqli_affected_rows($op1) > 0){
		$v = mysqli_fetch_array($re1);
		$_SESSION["username"] = $username;
		$_SESSION["role"] = $v[0];
		header("Location: browseSong.php");
	}else{
		header("Location: login.php?error=true");
	}
?>