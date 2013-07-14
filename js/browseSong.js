/**
 * @author Nicholas Rio
 */

//JS Event-Based Callback for keyup delay
(function ($) {
    $.fn.delayKeyup = function(callback, ms){
        var timer = 0;
        $(this).keyup(function(){                   
            clearTimeout (timer);
            timer = setTimeout(callback, ms);
        });
        return $(this);
    };
})(jQuery);

$("#searchSongs").delayKeyup(function(){
	$.getJSON("ajax/getSongs.php?q="+$("#searchSongs").val(),function(res){
		setTable(res);
	});
},1000);

function setTable(json){
	var res = "";
	for(var i=0;i < json['title'].length; i++){
		res += "<tr>";
		res += "<td>"+json['title'][i]+"</td>";
		res += "<td>"+json['composer'][i]+"</td>";
		res += "<td>"+json['arr'][i]+"</td>";
		res += "<td class='view'><a href='viewSong.php?id="+json['id'][i]+"'><i class='icon-eye'></i>View</a></td>";
		res += "<td class='download'><a href='"+json['loc'][i]+"'><i class='icon-download'></i>Download</a></td>";
		if($("#songHeader").html().search("Edit") != -1){
			res += "<td class='edit'><a href='editSong.php?id="+json['id'][i]+"'><i class='icon-pencil'></i>Edit</a></td>";
			res += "<td class='delete'><a href='deleteSong.php?id="+json['id'][i]+"'><i class='icon-trash'></i>Delete</a></td>";
		}
		res += "</tr>";
	}
	$("#songContent").html(res);	
}
