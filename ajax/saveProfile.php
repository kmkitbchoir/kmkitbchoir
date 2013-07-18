<?php
	session_start();
	if(isset($_SESSION['role']) && ($_SESSION['role'] == '0' || $_SESSION['role'] == '1')){
    	include_once('../config.php');
		$username = $_SESSION['username'];
		$email = $_POST['e'];
		$fname = $_POST['f'];
		$lname = $_POST['l'];
		
		$sq1 = $op->prepare("UPDATE user SET email=?, fname=?, lname=? WHERE user=?");
		$sq1->bind_param("ssss",$email,$fname,$lname,$username);
		$sq1->execute();
		
		echo "1";
    }   
?>