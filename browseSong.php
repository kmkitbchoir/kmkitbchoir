<?php
	include_once("header.php");
	include_once("config.php");
 	$op1 = mysqli_connect($db_host, $db_user, $db_pass);
	mysqli_select_db($op1, $db_db);
	
	$sq1 = "SELECT title,composer,arr,loc,id FROM songs ORDER BY title";
	$re1 = mysqli_query($op1,$sq1);
	echo mysqli_error($op1);
?>
	<link rel="stylesheet" media="screen" href="css/browseSong.css"/>
	<div class="row">
		<div class="centered twelve columns" align="center">
			<table border='1'>
				<thead>
					<tr>
						<td>Title</td>
						<td>Composer</td>
						<td>Arranger</td>
						<td>View Online</td>
						<td>Download File</td>
					</tr>
				</thead>
				<tbody>
		
<?php
	while($v = mysqli_fetch_array($re1)){
		$title = $v[0];
		$composer = $v[1];
		$arranger = $v[2];
		$location = $v[3];
		$id = $v[4];
		echo "<tr>";
		echo "<td>".$title."</td>";
		echo "<td>".$composer."</td>";
		echo "<td>".$arranger."</td>";
		echo "<td class='view'><a href='viewSong.php?id=".$id."'><i class='icon-eye'></i>View</a></td>";
		echo "<td class='download'><a href='".$location."'><i class='icon-download'></i>Download</a></td>";
		echo "</tr>";			
	}
?> 
			</tbody>
			</table>
		</div>
	</div>
	<br/>
<?php
	include_once 'footer.php';
?>
