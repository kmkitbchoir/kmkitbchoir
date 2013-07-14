/**
 * @author Nicholas Rio
 */

$("#user").change(function(){
	$("#user").parent().addClass("success");
});

$("#email").change(function(){
	$("#email").parent().addClass("warning");
});

$("#password").change(function(){
	$("#password").parent().addClass("danger");
});