$(function() {

	$('.grid').isotope({
	  	itemSelector: '.grid-item',
	  	masonry: {
		  	columnWidth: '.grid-sizer',
		  	gutter: '.gutter-sizer'
		}
	});

	$('.grid').imagesLoaded().progress( function() {
	  	$('.grid').isotope('layout');
	});

	// ,
	//   gutter: '.gutter-sizer'

	$('.grid-2').isotope({
	  	itemSelector: '.grid-item-2',
	  	percentPosition: true,
	  	getSortData: {
	  		color: '[data-color]',
	    	number: '[data-number] parseInt'
	  	},
	  	sortBy: 'number',
	  	masonry: {
		  	columnWidth: '.grid-sizer-2',
		  	gutter: '.gutter-sizer-2'
		}
	});

	$('.grid-2').imagesLoaded().progress( function() {
	  	$('.grid-2').isotope('layout');
	});

	$(window).resize(function(){
		var viewportWidth = $(window).width();
		var viewportHeight = $(window).height();

		// if(viewportWidth < 480) {
		// 	$('.grid').masonry('option', { columnWidth: '100%' });
		// 	$('.grid').masonry('reload');
		// }else {
		// 	$('.grid').masonry('option', { columnWidth: '.grid-sizer' });
		// }

	});
});