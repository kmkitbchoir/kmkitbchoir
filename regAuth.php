<?php
	include_once ("config.php");
	include_once ("lib/PHPMailer/class.phpmailer.php");
	$user = $_POST["user"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$token = md5($user.$email.$password.$firstname.$lastname.date('H:i:s'));
	
	if ($user != '' && $email != '' && $password != '' && $firstname != '' && $lastname != '') {
		//1st check passed
		$sq1 = $op -> prepare("INSERT INTO temp_user(user,pass,email,fname,lname,status,token) VALUES(?,?,?,?,?,0,?)");
		$password = md5($password);
		$sq1 -> bind_param("ssssss", $user, $password, $email, $firstname, $lastname,$token);
		$sq1 -> execute();
		
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPAuth = true;
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 465;
		$mail->Username = 'kmkitbchoir@gmail.com';
		$mail->Password = 'kmkitbchoir2013';
		$mail->SMTPSecure = 'ssl';
		
		$mail->From = 'kmkitbchoir@gmail.com';
		$mail->FromName = 'KMK ITB Choir';
		$mail->AddAddress($email,$firstname.' '.$lastname);
		
		$mail->WordWrap = 80;
		$mail->IsHTML(true);
		
		$mail->Subject = 'Kmkitbchoir site registration authentication';
		$mail->Body = "
			<h1>Hi there, welcome to kmkitbchoir.org!!</h1>
			<br/>
			To validate your registration, please click this following link :<br/>
			http://kmkitbchoir.org/tokenAuth.php?token=".$token."				
			<br/>
			Thanks for joining us!! :)
		";
		
		if(!$mail->send()){
			echo 'Problem sending message';
			echo '<br/>'.$mail->ErrorInfo;
			exit;			
		}else{
			include_once("header.php");

			echo "
				<div class='row'>
					<div class='centered nine columns' align='center'>
						<h2>Thanks for joining us!!</h2><br/>
						A confirmation message has been sent to your email<br/>
						Please check your email
					</div>
				</div>

			";
			include_once("footer.php");			
		}
	}
?>