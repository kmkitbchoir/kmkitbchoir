<?php
    session_start();
   	if(isset($_SESSION['role']) && ($_SESSION['role'] == '0' || $_SESSION['role'] == '1')){
    	include_once('../config.php');
		$email = $_POST['e'];
		
		$sq1 = $op->prepare("DELETE FROM temp_user WHERE email=?");
		$sq1->bind_param("s",$email);
		$sq1->execute();
		
		echo "1";
    }
?>