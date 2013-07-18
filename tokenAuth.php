
<?php
	include_once('header.php');
    include_once('config.php');
?>
<div class='row'>
	<div class='centered six columns' align='center'>
<?php	
	$token = $_GET['token'];
	$sq1 = $op->prepare("SELECT 1 FROM temp_user WHERE token=? AND status = '0'");
	$sq1->bind_param('s',$token);
	$sq1->execute();
	$sq1->bind_result($v['1']);
	$sq1->fetch();
	$sq1->close();
	if($v['1'] == '1'){
		$sq1 = $op->prepare("UPDATE temp_user SET status = '1' WHERE token = ?");
		$sq1->bind_param('s',$token);
		$sq1->execute();
		
		echo 'Your email has been verified<br/>';
		echo 'Please wait until an admin verify your account';
	}else{
		echo 'Email verification failed';		
	}
?>
	</div>
</div>
<?php	
	include_once('footer.php');
?>