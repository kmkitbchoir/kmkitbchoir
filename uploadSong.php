<html>
	<?php
		include_once 'header.php';
	?>
	<body>
		<form id="f_upload" method="POST" action="fileManagement.php" enctype="multipart/form-data">
			<table border="1">
				<tr>
					<td><label for="title">Song title :</label></td>
					<td><input type="text" id="title" name="title" size="50" maxlength="50"/></td>
				</tr>
				<tr>
					<td><label for="composer">Composer : </label></td>
					<td><input type="text" id="composer" name="composer" size="40" maxlength="40"/></td>
				</tr>
				<tr>
					<td><label for="arranger">Arranger : </label></td>
					<td><input type="text" id="arranger" name="arranger" size="40" maxlength="40"/></td>
				</tr>
				<tr>
					<td><label for="songs">Upload your song : </label></td>
					<td><input type="file" id="songs" name="songs" accept="application/pdf" onchange="validateFile()"/></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" id="submit" value="Submit!!" disabled="disabled"/></td>
				</tr>
			</table>
		</form>
	</body>
	<script src="js/jQuery.js" type="text/javascript"></script>
	<script src="js/uploadSong.js" type="text/javascript"></script>
</html>