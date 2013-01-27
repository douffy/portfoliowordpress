jQuery(function($){
    	
    	var $container = $('#container');

    		$container.imagesLoaded( function(){
    			$container.masonry({
    			itemSelector : '.box:not(.hidden)'
    			});
    			isAnimated: !Modernizr.csstransitions
    			});
    			
    	/*		
    	$("#web").click(function(e){
    		$container.find('hidden').fadeIn();
    		$container.find('.box').removeClass('hidden');
    		$container.find('.box:not(".web")').addClass('hidden').stop().fadeOut();
    		$container.masonry('reload');
    		location.hash="#web";
    		e.preventDefault();
    	});
    	
    	$("#print").click(function(e){
    		$container.find('hidden').fadeIn();
    		$container.find('.box').removeClass('hidden');
    		$container.find('.box:not(".print")').addClass('hidden').stop().fadeOut();
    		$container.masonry('reload');
    		e.preventDefault();
    	});
    	
    	$("#logo").click(function(e){
    		$container.find('hidden').fadeIn();
    		$container.find('.box').removeClass('hidden');
    		$container.find('.box:not(".logo")').addClass('hidden').stop().fadeOut();
    		$container.masonry('reload');
    		e.preventDefault();
    	});
    	
    	$container.find('a.thumb').click(function(e){
    		$container.find('unfold').removeClass('unfold');
    		$('#projet1').parent().addClass('unfold');
    		$container.masonry('reload');
    		e.preventDefault();
    	});
    	*/
    	
    	
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


