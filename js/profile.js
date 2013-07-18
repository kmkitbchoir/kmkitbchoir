/**
 * @author Nicholas Rio
 */

$("#save").click(function(){
	var username = $("#username").val();
	var email = $("#email").val();
	/*var oldpass = $("#oldpassword").val();
	var newpass = $("#newpassword").val();
	if(oldpass === undefined || oldpass === '' || oldpass === null){
		oldpass = '';
		newpass = '';
	}*/
	var fname = $("#firstname").val();
	var lname = $("#lastname").val();
	var conf = confirm("Are you sure to save this changes?");
	if(conf){
		$.post("ajax/saveProfile.php",{e:email,f:fname,l:lname}).done(function(res){
			console.log(res);
			if(res=='1'){
				window.alert("Save changes succesfull");
			}else{
				window.alert("Failed to save changes");
			}
		});
	}
});
