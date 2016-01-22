$(function(){
	$('#menu-logo-wrapper').addClass('white-version');

	var form = $('#contact');
	form.validate();

 	$('.submit-contact-form').on('click', function(e){
        e.preventDefault();

        // if(form.valid()) {

	        $(this).addClass('loading');

	        var subscribe_email = $(this).prev('input').val();	        

	        $.ajax({
	        	type: form.attr('method'),
		        url: form.attr('action'),
		        data: form.serialize()
	      	}).done(function(data) {
		        // Optionally alert the user of success here...
		        $('.response-msg').html(data)
		        $('.submit-contact-form').removeClass('loading');

	      	}).fail(function(data) {
		        // Optionally alert the user of an error here...
		        console.log(data);
	      	});

      	// }

    });


 	function getCaptcha(){
 		$.ajax({
	    	type: "GET",
	    	url: "php/simple-captcha.php"    	
	    }).done(function(data){
	    	$('.simple-captcha').html('<img src="'+data+'" alt="" />');
	    });	
 	}

 	getCaptcha();

 	$('.refresh-captcha').on('click', function(e){
 		e.preventDefault();
 		getCaptcha();
 	});

 	(function($) {
	    "use strict";
	    $.fn.openSelect = function()
	    {
	        return this.each(function(idx,domEl) {
	            if (document.createEvent) {
	                var event = document.createEvent("MouseEvents");
	                event.initMouseEvent("mousedown", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
	                domEl.dispatchEvent(event);
	            } else if (element.fireEvent) {
	                domEl.fireEvent("onmousedown");
	            }
	        });
	    }
	}(jQuery));

 	$('.dropdown').on('click', function(e){
 		e.preventDefault();
 		$(this).children('select').openSelect();
 	});
    
});