<?php
	session_start();
    include_once("config.php");
	$op1 = mysqli_connect($db_host, $db_user, $db_pass);
	mysqli_select_db($op1, $db_db);
	
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
	$re1 = $sq1->get_result();
	if(mysqli_affected_rows($op) > 0){
		$v = $re1->fetch_assoc();
		$_SESSION["username"] = $username;
		$_SESSION["role"] = $v['role'];
		header("Location: browseSong.php");
	}else{
		header("Location: login.php?error=true");
	}
?>