<?php
	include_once("header.php");
    include_once("config.php");
	$op1 = mysqli_connect($db_host, $db_user, $db_pass);
	mysqli_select_db($op1, $db_db);
	
	$id = $_GET["id"];
	$sq1 = "SELECT loc FROM songs WHERE id='$id'";
	$re1 = mysqli_query($op1,$sq1);
	print mysqli_error($op1);
	$v = mysqli_fetch_array($re1);
	$location = $v[0];
	
	if($location != ''){
		echo "
			<div id ='viewPDF' align='center' src='$location' base='$db_home'>
				<script type='text/javascript' src='js/jQuery.js'></script>
				<script type='text/javascript' src='js/viewSong.js'></script>
			</div>
		";
	}
	echo "<br/>";
	include_once("footer.php");
?>