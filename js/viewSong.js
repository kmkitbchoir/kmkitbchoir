/**
 * @author Nicholas Rio
 */

var w = $(window).width();
var h = $(window).height();
var h_height = $("header").height();

//Scaling the viewer
w = 0.9 * w;
h = 0.96 * (h - h_height);
$('a.media').media({width:w, height:h});

//Setting focus when ready
$(document).ready(function(){
	console.log("Status ready");
	$('iframe').focus();
});

