<?php
	include_once('../config.php');
	
    $user = $_GET['u'];
	
	$sq1 = $op->prepare("SELECT 1 FROM user WHERE user=?");
	$sq1->bind_param("s",$user);
	$sq1->execute();
	$sq1->bind_result($v['1']);
	$sq1->fetch();
	
	echo $v['1'];
?>