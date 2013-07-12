<?php
	//Init SQL connection
 	include_once("config.php");
	
	$file_name = $_FILES['songs']['name'];
    $file_tmp = $_FILES['songs']['tmp_name'];
	$file_type = $_FILES['songs']['type'];
	if($file_type == 'application/pdf'){
		$title = $_POST['title'];
		$composer = $_POST['composer'];
		$arranger = $_POST['arranger'];
		
		$pattern = "[\<\>]";
		if(preg_match($pattern, $title, $matches) != 1 && 
		preg_match($pattern, $composer, $matches) != 1 &&
		preg_match($pattern, $arranger, $matches) != 1){
			//moving the file into the right place
			$new_name = 'songs/'.$title.'-'.date('ymdHis').'.pdf';
			move_uploaded_file($file_tmp, $new_name);
			//Insert new song to the db
			$sq1 = $op->prepare("
				INSERT INTO songs(title,composer,arr,loc) 
				VALUES(?,?,?,?)
			");
			$sq1->bind_param('ssss',$title,$composer,$arranger,$new_name);
			$sq1->execute();
			echo $sq1->error;
		}
	}
	
	header("Location: uploadSong.php");
?>