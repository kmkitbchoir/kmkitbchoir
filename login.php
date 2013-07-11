<?php
	include_once("header.php");
?>
<form method="POST" action="loginAuth.php">
	<div class="row">
		<div class="centered six columns" align="center">
			<table>
				<tr>
					<td>
						Username
					</td>
					<td>
						<input type="text" id="username" name="username"/>
					</td>
				</tr>
				<tr>
					<td>
						Password
					</td>
					<td>
						<input type="password" id="password" name="password"/>
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<input type="submit"/>
					</td>
				</tr>
			</table>
		</div>		
	</div>
</form>
<?php
	include_once("footer.php");
?>
