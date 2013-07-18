<?php
	include_once("config.php");
	
	//if($file_type == 'application/pdf'){
		$id = $_POST['id'];
		$title = $_POST['title'];
		$composer = $_POST['composer'];
		$arranger = $_POST['arranger'];
		
		$pattern = "[\<\>]";
		if(preg_match($pattern, $title, $matches) != 1 && 
		preg_match($pattern, $composer, $matches) != 1 &&
		preg_match($pattern, $arranger, $matches) != 1){
			
			//Insert new song to the db
			$sq1 = $op->prepare("UPDATE songs SET title=?, composer=?, arr=? WHERE id=?");
			$sq1->bind_param('ssss',$title,$composer,$arranger,$id);
			$sq1->execute();
			echo $sq1->error;
		}
		
		if(isset($_FILES['songs']) && $_FILES['songs']['name'] != ''){
			$file_name = $_FILES['songs']['name'];
		    $file_tmp = $_FILES['songs']['tmp_name'];
			$file_type = $_FILES['songs']['type'];
			//moving the file into the right place
			
			$new_name = 'songs/'.$title.'-'.date('ymdHis').'.pdf';
			move_uploaded_file($file_tmp, $new_name);
			
			$sq1 = $op->prepare("UPDATE songs SET loc=? WHERE id=?");
			$sq1->bind_param('ss',$new_name,$id);
			$sq1->execute();
		}
	
    header("Location: browseSong.php");
?>