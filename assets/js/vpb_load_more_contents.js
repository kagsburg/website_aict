/*********************************************************************
* This script has been released with the aim that it will be useful.
* Written by Vasplus Programming Blog
* Website: www.vasplus.info
* Email: info@vasplus.info
* All Copy Rights Reserved by Vasplus Programming Blog
***********************************************************************/


//This is only for demo purpose - It will alert a loaded content when clicked on the content
function vpb_show_text(text)
{
	alert(text); 
} 


//This is the function to load more tutorials or content when clicked on the View More Tutorials button
function Vasplus_Programming_Blog_Load_More_Contents()
{
	var last_loaded_id = $("#last_loaded_id").val();
	var dataString = "last_loaded_id="+ last_loaded_id;
	
	$.ajax({
		type: "POST",
		url: "vpb_load_more_contents.php",
		data: dataString, 
		cache: false,
		beforeSend: function() 
		{
			$(".button").html('<center><div align="center"><img src="icons/slider_loader.gif" align="absabsmiddle" alt="waiting" title="Loading more..." /></div></center>');
		},
		success: function(response) 
		{
			$("#more_tutorials_loaded").append($(response).fadeIn(2000));
			$(".button").html('Load More Articles');
		}
	});
}