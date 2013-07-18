<html>
	<?php
		include_once 'header.php';
	?>
	<link rel='stylesheet' media='screen' href='css/register.css'/>
	
	<body>
		<form id='f_reg' method='POST' action='regAuth.php'>
			<div class='row'>	
				<div class='centered six columns' align='center'>
					<div class='field'>
						<label for='user'>Username</label>
						<input type='text' class='text input' id='user' name='user' placeholder='Username' size='40' maxlength='40'/>
					</div>
					<div class='field'>
						<label for='email'>Email</label>
						<input type='email' class='email input' id='email' name='email' placeholder='Email' size='50' maxlength='50'/>
					</div>
					<div class='field'>		
						<label for='password'>Password</label>
						<input type='password' class='password input' id='password' name='password' placeholder='Password' size='40' maxlength='40'/>
					</div>
					<div class='field'>	
						<label for='firstname'>First Name</label>
						<input type='text' class='text input' id='firstname' name='firstname' placeholder='First Name' size='40' maxlength='40'/>
					</div>
					<div class='field'>	
						<label for='lastname'>Last Name</label>
						<input type='text' class='text input' id='lastname' name='lastname' placeholder='Last Name' size='40' maxlength='40'/>
					</div>
					<div class='medium primary btn'>
						<input type='submit' id='submit' value='Register Now!!' disabled='disabled'/>
					</div>
				</div>
			</div>
		</form>
		<?php
			include_once 'footer.php';
		?>
	</body>
	
	<script src='js/register.js' type='text/javascript'></script>
</html>