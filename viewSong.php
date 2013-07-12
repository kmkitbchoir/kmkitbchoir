<?php
	include_once("header.php");
    include_once("config.php");
	
	$id = $_GET["id"];
	$sq1 = $op->prepare("SELECT loc FROM songs WHERE id=?");
	$sq1->bind_param('i',$id);
	$sq1->execute();
	$re1 = $sq1->get_result();
	$v = $re1->fetch_assoc();
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