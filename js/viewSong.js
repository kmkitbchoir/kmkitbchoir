/**
 * @author Nicholas Rio
 */
var w = $(window).width();
var h = $(window).height();
var h_height = $("header").height();
var src = $('#viewPDF').attr('src');

//Scaling the viewer
w = 0.9 * w;
h = 0.96 * (h - h_height);

//Check browser compatibility
var patt = new RegExp("Chrome");
if(patt.test(navigator.userAgent)){//Browser is Google Chrome
	$('#viewPDF').append(
		"<iframe id='viewer' src='"+src+"'></iframe>"
	);
}else{//If browser is not google chrome, use Google Docs service to open the pdf
	var base = $('#viewPDF').attr('base');
	var out_url = encodeURIComponent(base + "/" + src);
	console.log(out_url);
	$('#viewPDF').append(
		"<iframe id='viewer' src=http://docs.google.com/viewer?url="+out_url+"&embedded=true></iframe>"
	);
}

//Adding the viewer
$('#viewer').width(w);
$('#viewer').height(h);
$('#viewer').focus();