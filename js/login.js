/**
 * @author Nicholas Rio
 */

var err = getURLParameter("error");
if(err!==null){
	$("#container").append("<div class='danger alert'>Please check your username and/or password</div>");
}

function getURLParameter(name) {
	return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search)||[,""])[1].replace(/\+/g, '%20'))||null
}