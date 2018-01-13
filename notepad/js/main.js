$(document).ready(function(){		
	
	// Toggle menu
	  $(".hamburger").on('click',function(){
	    $(this).toggleClass("isActive");
	    $('#navOverlayWrapper').toggleClass('isActive');
	  });
	  
	  $( window ).scroll(function() { 
		  
		  	setTimeout(function(){  
	
	
	    $('.hamburger').removeClass("isActive");		  
	    $('#navOverlayWrapper').removeClass('isActive');		  
	    
	    }, 300);
	  });
});


$(document).keyup(function(e) {
     if (e.keyCode == 27) { // escape key maps to keycode `27`
	    $('.hamburger').toggleClass("isActive");		  
	    $('#navOverlayWrapper').toggleClass('isActive');
    }
    
     if (e.keyCode == 79) { // 'O'
	    $('.thumb').slideToggle();		  
    }
});


