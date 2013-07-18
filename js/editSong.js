/**
 * @author Nicholas Rio
 */

function validateFile(){
	//Validate uploaded file
	var file_ext = $('#songs').val().split(".").pop().toLowerCase();
	if(file_ext !== "pdf"){
		console.log("Wrong file extention");
		$('#submit').attr("disabled","disabled");		
	}else{
		console.log("Correct file extention");
		$('#submit').removeAttr("disabled");		
	}	
}
