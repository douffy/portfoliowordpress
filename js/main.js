jQuery(function($){
    	
    	var $container = $('#container');

    		$container.imagesLoaded( function(){
    			$container.masonry({
    			itemSelector : '.box:not(.hidden)'
    			});
    			isAnimated: !Modernizr.csstransitions
    			});
    	
    	$('.scroll').hide();
    	$(window).scroll(function(){
		    	if ($(this).scrollTop() >1000){
			    	$('.scroll').fadeIn();
		    	}else{
			    	$('.scroll').fadeOut();
		    	}
	    	});
	    
	    $('.scroll a').click(function(){
		  $('body, html').animate({
			  scrollTop:0
		  }, 300);
		  return false;  
	    });
})


