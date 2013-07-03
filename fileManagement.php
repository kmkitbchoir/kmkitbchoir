<?php
	//Init SQL connection
 	include_once("config.php");
 	$op1 = mysqli_connect($db_host, $db_user, $db_pass);
	mysqli_select_db($op1, $db_db);
	
	$file_name = $_FILES['songs']['name'];
    $file_tmp = $_FILES['songs']['tmp_name'];
	$file_type = $_FILES['songs']['type'];
	if($file_type == 'application/pdf'){
		$title = $_POST['title'];
		$composer = $_POST['composer'];
		$arranger = $_POST['arranger'];
		//moving the file into the right place
		$new_name = 'songs/'.$file_name;
		move_uploaded_file($file_tmp, $new_name);
		//Insert new song to the db
		$sq1 = "INSERT INTO songs(title,composer,arr,loc) 
		VALUES('$title','$composer','$arranger','$new_name')";
		$re1 = mysqli_query($op1,$sq1);
		echo mysqli_error($op1);
	}
	
	header("Location: uploadSong.php");
?>