<?php
	include_once("header.php");
    include_once("config.php");
	
	$id = $_GET["id"];
	$sq1 = $op->prepare("SELECT loc FROM songs WHERE id=?");
	$sq1->bind_param('i',$id);
	$sq1->execute();
	$sq1->bind_result($v['loc']);
	$sq1->fetch();
	$location = $v['loc'];
	
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