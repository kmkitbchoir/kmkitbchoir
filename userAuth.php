<?php
	include_once('header.php');

	if(isset($_SESSION['role']) && ($_SESSION['role'] == '0' || $_SESSION['role'] == '1')){
		echo "<link rel='stylesheet' href='css/userAuth.css' media='screen'>";	
		echo "<div class='row'>";
		echo "<div class='centered eight columns'>";
		echo "<table border='1'>";
		echo "<thead>";
		echo "<tr>";
		echo "<td>Username</td>";
		echo "<td>First Name</td>";
		echo "<td>Last Name</td>";
		echo "<td>Email</td>";
		echo "<td>Verify</td>";
		echo "<td>Deny</td>";
		echo "</tr>";
		echo "</thead>";
		echo "<tbody>";
		$sq1 = $op->prepare("SELECT user, fname, lname, email FROM temp_user WHERE status='1'");
		$sq1->execute();
		$sq1->bind_result($v['user'],$v['fname'],$v['lname'],$v['email']);
		while($sq1->fetch()){
			echo "<tr>";
			echo "<td>".$v['user']."</td>";
			echo "<td>".$v['fname']."</td>";
			echo "<td>".$v['lname']."</td>";
			echo "<td>".$v['email']."</td>";
			echo "<td class='verify' fullname='".$v['fname']." ".$v['lname']."' email='".$v['email']."'>Verify</td>";
			echo "<td class='deny' fullname='".$v['fname']." ".$v['lname']."' email='".$v['email']."'>Deny</td>";
			echo "</tr>";			
		}
		echo "</table>";
		echo "</div>";
		echo "</div>";
		echo "<script type='text/javascript' src='js/jQuery.js'></script>";
		echo "<script type='text/javascript' src='js/userAuth.js'></script>";
	}else{
		header("Location: login.php");		
	}
	
	include_once('footer.php');
?>