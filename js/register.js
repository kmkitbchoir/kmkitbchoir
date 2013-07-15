/**
 * @author Nicholas Rio
 */
var userValid, emailValid, passwordValid, firstnameValid, lastnameValid = false;

$("#user").change(function(){
	$.get("ajax/checkUser.php?u="+$("#user").val(),function(data, status){
		if(data == '1'){
			$("#userAlert").remove();
			$("#user").parent().removeClass("success");
			$("#user").parent().addClass("danger");
			$("#user").parent().append("<div class='danger alert' id='userAlert'>Username already used by another user</div>");
			userValid = false;
		}else{
			$("#user").parent().removeClass("danger");
			$("#user").parent().addClass("success");
			$("#userAlert").remove();
			userValid = true;
		}
		validate();
	});
});

$("#email").change(function(){
	var patt = new RegExp("[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?");
	if(patt.test($("#email").val())){
		$.get("ajax/checkEmail.php?e="+$("#email").val(),function(data, status){
			if(data == '1'){
				$("#emailAlert").remove();
				$("#email").parent().removeClass("success");
				$("#email").parent().addClass("danger");
				$("#email").parent().append("<div class='danger alert' id='emailAlert'>Email already used by another user</div>");
				emailValid = false;
			}else{
				$("#email").parent().removeClass("danger");
				$("#email").parent().addClass("success");
				$("#emailAlert").remove();
				emailValid = true;
			}
			validate();
		});
	}else{
		$("#emailAlert").remove();
		$("#email").parent().removeClass("success");
		$("#email").parent().addClass("danger");
		$("#email").parent().append("<div class='danger alert' id='emailAlert'>Please enter a valid email</div>");
		emailValid = false;
	}
});

$("#password").change(function(){
	if($("#password").val().length < 8){
		$("#passwordAlert").remove();
		$("#password").parent().removeClass("success");
		$("#password").parent().addClass("danger");
		$("#password").parent().append("<div class='danger alert' id='passwordAlert'>Minimum password length is 8 characters</div>");
		passwordValid = false;
	}else{
		$("#password").parent().removeClass("danger");
		$("#password").parent().addClass("success");
		$("#passwordAlert").remove();
		passwordValid = true;
	}
	validate();
});

$("#firstname").change(function(){
	if($("#firstname").val().length == 0){
		$("#firstnameAlert").remove();
		$("#firstname").parent().removeClass("success");
		$("#firstname").parent().addClass("danger");
		$("#firstname").parent().append("<div class='danger alert' id='firstnameAlert'>This field must not be empty</div>");
		firstnameValid = false;
	}else{
		$("#firstname").parent().removeClass("danger");
		$("#firstname").parent().addClass("success");
		$("#firstnameAlert").remove();
		firstnameValid = true;
	}
	validate();
});

$("#lastname").change(function(){
	if($("#lastname").val().length == 0){
		$("#lastnameAlert").remove();
		$("#lastname").parent().removeClass("success");
		$("#lastname").parent().addClass("danger");
		$("#lastname").parent().append("<div class='danger alert' id='firstnameAlert'>This field must not be empty</div>");
		lastnameValid = false;
	}else{
		$("#lastname").parent().removeClass("danger");
		$("#lastname").parent().addClass("success");
		$("#lastnameAlert").remove();
		lastnameValid = true;
	}
	validate();
});

function validate(){
	if (userValid && emailValid && passwordValid && firstnameValid && lastnameValid){
		$("#submit").removeAttr("disabled");
		return true;
	}else{
		$("#submit").prop("disabled",true);
		return false;
	}
}

