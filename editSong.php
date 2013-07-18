<?php
    include_once("header.php");	
	include_once("config.php");
	
	$id = $_GET["id"];
	
	$sq1 = $op->prepare("SELECT title,composer,arr FROM songs WHERE id=?");
	$sq1->bind_param("s",$id);
	$sq1->execute();
	$sq1->bind_result($v["title"],$v["composer"],$v["arr"]);
	$sq1->fetch();
	$title = $v["title"];
	$composer = $v["composer"];
	$arr = $v["arr"];
	
	echo "
		<form id='f_upload' method='POST' action='updateSong.php' enctype='multipart/form-data'>
			<div class='row'>	
				<div class='centered six columns' align='center'>
					<input type='hidden' name='id' value='$id'/>
					<div class='field'>
						<label for='title'>Song title</label>
						<input type='text' class='text input' id='title' name='title' value='$title' size='50' maxlength='50'/>
					</div>
					<div class='field'>
						<label for='composer'>Composer</label>
						<input type='text' class='text input' id='composer' name='composer' value='$composer' size='40' maxlength='40'/>
					</div>
					<div class='field'>
						<label for='arranger'>Arranger</label>
						<input type='text' class='text input' id='arranger' name='arranger' value='$arr' size='40' maxlength='40'/>
					</div>
					<div class='field'>
						<label for='songs'>Upload your song : </label>
						<input type='file' id='songs' name='songs' accept='application/pdf' onchange='validateFile()'/>
					</div>
					<div class='medium primary btn'>
						<input type='submit' id='submit' value='Save'/>
					</div>
				</div>
			</div>
		</form>
	";
	
	include_once("footer.php");
?>
<script type="text/javascript" src="js/editSong.js"></script>