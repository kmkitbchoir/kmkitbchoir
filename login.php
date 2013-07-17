<?php
	include_once("header.php");
?>
<link rel="stylesheet" href="css/login.css" media="screen"/>
<form method="POST" action="loginAuth.php">
	<div class="row">
		<div class="centered six columns" align="center" id="container">
			<table>
				<tr>
					<td>
						Username
					</td>
					<td class="field">
						<input type="text" class="text input" id="username" name="username"/>
					</td>
				</tr>
				<tr>
					<td>
						Password
					</td>
					<td class="field">
						<input type="password" class="password input" id="password" name="password"/>
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<div class="medium primary btn" align="center">
							<input type="submit"/>
						</div>
					</td>
				</tr>
			</table>
		</div>		
	</div>
</form>
<?php
	include_once("footer.php");
?>
<script src="js/login.js" type="text/javascript"></script>
