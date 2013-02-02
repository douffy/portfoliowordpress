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
	    
	    $('form#contactForm').submit(function() {
		$('form#contactForm .error').remove();
		var hasError = false;
		$('.requiredField').each(function() {
			if(jQuery.trim($(this).val()) == '') {
				var labelText = $(this).prev('label').text();
				$(this).parent().append('<span class="error">Vous avez oublié d\'entrer votre '+labelText+'.</span>');
				hasError = true;
			} else if($(this).hasClass('email')) {
				var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
				if(!emailReg.test(jQuery.trim($(this).val()))) {
					var labelText = $(this).prev('label').text();
					$(this).parent().append('<span class="error">Invalide '+labelText+'.</span>');
					hasError = true;
				}
			}
		});
		if(!hasError) {
			$('form#contactForm li.buttons button').fadeOut('normal', function() {
				$(this).parent().append('<img src="/wp-content/themes/td-v3/images/template/loading.gif" alt="Loading&hellip;" height="31" width="31" />');
			});
			var formInput = $(this).serialize();
			$.post($(this).attr('action'),formInput, function(data){
				$('form#contactForm').slideUp("fast", function() {				   
					$(this).before('<p class="thanks"><strong>Merci !</strong> Votre email à bien été envoyé.</p>');
				});
			});
		}
		
		return false;
		
	});

})


