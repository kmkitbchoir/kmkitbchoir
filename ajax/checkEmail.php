<?php
	include_once('../config.php');

	$email = $_GET['e'];
	
	$sq1 = $op->prepare("SELECT 1 FROM user WHERE email=?");
	$sq1->bind_param("s",$email);
	$sq1->execute();
	$re1 = $sq1->get_result();
	$v = $re1->fetch_assoc();
	
	echo $v['1'];    
?>