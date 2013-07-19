<?php
	session_start();
   	if(isset($_SESSION['role']) && ($_SESSION['role'] == '0' || $_SESSION['role'] == '1')){
    	include_once('../config.php');
		$email = $_POST['e'];
		
		$sq1 = $op->prepare("SELECT user,pass,fname,lname FROM temp_user WHERE email=?");
		$sq1->bind_param("s",$email);
		$sq1->execute();
		$sq1->bind_result($v['user'],$v['pass'],$v['fname'],$v['lname']);
		$sq1->fetch();
		$sq1->close();
		
		if($v['user'] != null){
			include_once ("../lib/PHPMailer/class.phpmailer.php");
			
			$user = $v['user'];
			$pass = $v['pass'];
			$fname = $v['fname'];
			$lname = $v['lname'];
			
			$sq1 = $op->prepare("INSERT INTO user(user,pass,email,fname,lname,role) VALUES(?,?,?,?,?,2)");
			$sq1->bind_param("sssss",$user,$pass,$email,$fname,$lname);
			$sq1->execute();
			
			$sq1 = $op->prepare("DELETE FROM temp_user WHERE email=?");
			$sq1->bind_param("s",$email);
			$sq1->execute();
			
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
			$mail->AddAddress($email,$fname.' '.$lname);
			
			$mail->WordWrap = 80;
			$mail->IsHTML(true);
			
			$mail->Subject = 'Kmkitbchoir site account validation';
			$mail->Body = "
				<h1>Your account at kmkitbchoir.org has been validated</h1>
				<br/>
				You can now login into our site				
				<br/>
				Please enjoy your time!! :)
			";
			
			if(!$mail->send()){
				echo 'Problem sending message';
				echo '<br/>'.$mail->ErrorInfo;
				exit;			
			}
			
			echo '1';
		}else{
			echo '0';
		}
    }
?>