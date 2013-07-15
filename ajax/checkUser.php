<?php
	include_once('../config.php');
	
    $user = $_GET['u'];
	
	$sq1 = $op->prepare("SELECT 1 FROM user WHERE user=?");
	$sq1->bind_param("s",$user);
	$sq1->execute();
	$re1 = $sq1->get_result();
	$v = $re1->fetch_assoc();
	
	echo $v['1'];
?>