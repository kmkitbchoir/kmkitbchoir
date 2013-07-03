<?php
	include_once("header.php");
	include_once("config.php");
 	$op1 = mysqli_connect($db_host, $db_user, $db_pass);
	mysqli_select_db($op1, $db_db);
	
	$sq1 = "SELECT title,composer,arr,loc,id FROM songs";
	$re1 = mysqli_query($op1,$sq1);
	echo mysqli_error($op1);
	
	echo "<table border='1'>";
	echo "<thead>";
	echo "<tr>";
	echo "<td>Title</td>";
	echo "<td>Composer</td>";
	echo "<td>Arranger</td>";
	echo "<td>View Online</td>";
	echo "<td>Download File</td>";
	echo "</tr>";
	echo "</thead>";
	echo "<tbody>";
	while($v = mysqli_fetch_array($re1)){
		$title = $v[0];
		$composer = $v[1];
		$arranger = $v[2];
		$location = $v[3];
		$id = $v[4];
		echo "<tr>";
		echo "<td>".$title."</td>";
		echo "<td>".$composer."</td>";
		echo "<td>".$arranger."</td>";
		echo "<td><a href='viewSong.php?id=".$id."'>View</a></td>";
		echo "<td><a href='".$location."'>Download</a></td>";
		echo "</tr>";			
	}  
	echo "</tbody>";
	echo "</table>";
?>