/**
 * @author Nicholas Rio
 */

$(".verify").click(function(){
	var unique = $(this);
	var fullname = $(this).attr('fullname');
	var email = $(this).attr('email');
	var conf = confirm(
		"Are you sure to verify : \n"+
		"Name : " + fullname + "\n" +
		"Email : " + email
	);
	if(conf){
		$.post("ajax/verifyUser.php",{e:email}).done(function(res){
			console.log(res);
			if(res=='1'){
				unique.parent().remove();
			}
		});
	}	
});

$(".deny").click(function(){
	var unique = $(this);
	var fullname = $(this).attr('fullname');
	var email = $(this).attr('email');
	var conf = confirm(
		"Are you sure to deny request from : \n"+
		"Name : " + fullname + "\n" +
		"Email : " + email
	);
	if(conf){
		$.post("ajax/denyUser.php",{e:email}).done(function(res){
			console.log(res);
			if(res=='1'){
				unique.parent().remove();
			}
		});
	}	
});
