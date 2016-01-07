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
		layoutMode: 'packery',
	  	itemSelector: '.grid-item-2',
	  	percentPosition: true,
	  	getSortData: {
	  		color: '[data-color]',
	    	number: '[data-number] parseInt'
	  	},
	  	// sortBy: 'number',
	  	packery: {
		  	columnWidth: '.grid-sizer-2',
		  	gutter: '.gutter-sizer-2'
		}
	});

	$('.grid-2').imagesLoaded().progress( function() {
	  	$('.grid-2').isotope('layout');
	});

	$('.grid-3').isotope({
		layoutMode: 'packery',
	  	itemSelector: '.grid-item-3',
	  	percentPosition: true,
	  	getSortData: {
	  		color: '[data-color]',
	    	number: '[data-number] parseInt'
	  	},
	  	sortBy: 'number',
	  	packery: {
		  	columnWidth: '.grid-sizer-3',
		  	gutter: '.gutter-sizer-3'
		}
	});
	$('.grid-3').imagesLoaded().progress( function() {
	  	$('.grid-3').isotope('layout');
	});

	// $(window).resize(function(){
	// 	var viewportWidth = $(window).width();
	// 	var viewportHeight = $(window).height();

	// 	if(viewportWidth < 1200) {
	// 		$('.grid-3').isotope({
	// 			layoutMode: 'packery',
	// 		  	itemSelector: '.grid-item-3',
	// 		  	percentPosition: true,
	// 		  	getSortData: {
	// 		  		color: '[data-color]',
	// 		    	number: '[data-number] parseInt'
	// 		  	},
	// 		  	// sortBy: 'number',
	// 		  	packery: {
	// 			  	columnWidth: '.grid-sizer-3',
	// 			  	gutter: '.gutter-sizer-3'
	// 			}
	// 		});
	// 		$('.grid-3').imagesLoaded().progress( function() {
	// 		  	$('.grid-3').isotope('layout');
	// 		});
	// 	}else {
	// 		$('.grid-3').isotope('destroy');
	// 	}
	// });

});