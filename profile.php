<?php
	include_once("header.php");
	
	$username = $_SESSION["username"];
	include_once("config.php");
	
	$sq1 = $op->prepare("SELECT email,fname,lname FROM user WHERE user=?");
	$sq1->bind_param("s",$username);
	$sq1->execute();
	$sq1->bind_result($v["email"],$v["fname"],$v["lname"]);
	$sq1->fetch();
	
	$email = $v["email"];
	$fname = $v["fname"];
	$lname = $v["lname"];
	
	echo "
		<div class='row'>
			<div class='centered six columns' align='center'>
				<div class='field'>
					<label for='user'>Username</label>
					<input type='text' class='text input' id='user' name='user' value='$username' size='40' maxlength='40' readonly/>
				</div>
				<div class='field'>
					<label for='email'>Email</label>
					<input type='email' class='email input' id='email' name='email' value='$email' size='50' maxlength='50'/>
				</div>
				<!--div class='field'>		
					<label for='password'>Old Password</label>
					<input type='password' class='password input' id='oldpassword' name='oldpassword' placeholder='Old Password' size='40' maxlength='40'/>
				</div>
				<div class='field'>		
					<label for='password'>New Password</label>
					<input type='password' class='password input' id='newpassword' name='newpassword' placeholder='New Password (fill this field to change your password)' size='40' maxlength='40'/>
				</div--!>
				<div class='field'>	
					<label for='firstname'>First Name</label>
					<input type='text' class='text input' id='firstname' name='firstname' value='$fname' size='40' maxlength='40'/>
				</div>
				<div class='field'>	
					<label for='lastname'>Last Name</label>
					<input type='text' class='text input' id='lastname' name='lastname' value='$lname' size='40' maxlength='40'/>
				</div>
				<div class='medium primary btn'>
					<input type='button' id='save' value='Save Changes'/>
				</div>
			</div>
		</div>
		
	";
	
	include_once("footer.php");
?>
<script type="text/javascript" src="js/profile.js"></script>