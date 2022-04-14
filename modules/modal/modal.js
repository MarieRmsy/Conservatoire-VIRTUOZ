$(document).ready(function(){

    // Slide down effect starts here
    $("#slide-down-btn").click( function()
        {
	       $("#slide-down-modal").slideDown('slow/400/fast', function() {
	     		$("#slide-down-modal").css("display", "block");  	
	       });
        }
    );

    $("#slide-down-close").click( function()
        {
        	$("#slide-down-modal").slideUp('slow/400/fast', function() {
	     		$("#slide-down-modal").css("display", "none");  	
	       });
        }
    );

 });