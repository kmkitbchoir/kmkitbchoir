<?php
	session_start();
    include_once("config.php");
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	$password = md5($password);
	
	$sq1 = $op->prepare("
		SELECT role FROM user
		WHERE user=? AND pass=?
	");
	$sq1->bind_param('ss',$username,$password);
	$sq1->execute();
	echo $sq1->error;
	$sq1->bind_result($v['role']);
	$sq1->fetch();
	if($v['role'] != ''){
		$_SESSION["username"] = $username;
		$_SESSION["role"] = $v['role'];
		header("Location: browseSong.php");
	}else{
		header("Location: login.php?error=true");
	}
?>