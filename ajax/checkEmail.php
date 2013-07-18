<?php
	include_once('../config.php');

	$email = $_GET['e'];
	
	$sq1 = $op->prepare("SELECT 1 FROM user WHERE email=?");
	$sq1->bind_param("s",$email);
	$sq1->execute();
	$sq1->bind_result($v['1']);
	$sq1->fetch();
	
	echo $v['1'];    
?>