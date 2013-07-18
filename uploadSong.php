<html>
	<?php
		include_once 'header.php';
	?>
	
	<body>
		<form id='f_upload' method='POST' action='fileManagement.php' enctype='multipart/form-data'>
			<div class='row'>	
				<div class='centered six columns' align='center'>
					<div class='field'>
						<label for='title'>Song title</label>
						<input type='text' class='text input' id='title' name='title' placeholder='Title' size='50' maxlength='50'/>
					</div>
					<div class='field'>
						<label for='composer'>Composer</label>
						<input type='text' class='text input' id='composer' name='composer' placeholder='Composer' size='40' maxlength='40'/>
					</div>
					<div class='field'>
						<label for='arranger'>Arranger</label>
						<input type='text' class='text input' id='arranger' name='arranger' placeholder='Arranger' size='40' maxlength='40'/>
					</div>
					<div class='field'>
						<label for='songs'>Upload your song : </label>
						<input type='file' id='songs' name='songs' accept='application/pdf' onchange='validateFile()'/>
					</div>
					<div class='medium primary btn'>
						<input type='submit' id='submit' value='Submit!!' disabled='disabled'/>
					</div>
				</div>
			</div>
		</form>
		<?php
			include_once 'footer.php';
		?>
	</body>
	
	<script src='js/uploadSong.js' type='text/javascript'></script>
</html>