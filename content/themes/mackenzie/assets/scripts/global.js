/* ---------------------------------------------------------------------
Global JavaScript & jQuery

Target Browsers: All
Authors: John Heimkes

JS Devs beware! WordPress loads jQuery in noConflict mode.
------------------------------------------------------------------------ */
jQuery(function($) {

  if($(".beer-generator-description").length){
	    $.ajax({
	        url: "/../../../../../random-beer",
	        dataType: "html",
	        success: function(data){
	            $(".beer-generator-description").html(data);
	        },
	        error: function(xhr, error){
	            console.debug(xhr); console.debug(error);
	        }
	    });
	}
    
    
    $('#home-carousel').cycle();
    
    $(".beer-please").click(function(e){
        $.ajax({
            url: "/../../../../../random-beer",
            dataType: "html",
            success: function(data){
                $(".beer-generator-description").html(data);
            },
            error: function(xhr, error){
                console.debug(xhr); console.debug(error);
            }
        });
        e.preventDefault();
        
    });
});