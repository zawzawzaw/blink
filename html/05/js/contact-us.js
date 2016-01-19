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
});