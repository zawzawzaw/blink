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

	$('.grid-4').isotope({
		layoutMode: 'packery',
	  	itemSelector: '.grid-item-4',
	  	percentPosition: true,
	  	getSortData: {
	  		color: '[data-color]',
	    	number: '[data-number] parseInt'
	  	},
	  	sortBy: 'number',
	  	packery: {
		  	columnWidth: '.grid-sizer-4',
		  	gutter: '.gutter-sizer-4'
		}
	});
	$('.grid-4').imagesLoaded().progress( function() {
	  	$('.grid-4').isotope('layout');
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

	


    function openNewWindow(URLtoOpen, windowName, windowFeatures) { 
        newWindow=window.open(URLtoOpen, windowName, windowFeatures); 
    }

    var bg = $('.carousel-inner .item').css('background-image');
    var imageURL = bg.replace('url(','').replace(')','');
    var img = imageURL.replace(/['"]+/g, '');
    var currentURL = window.location.href;
    var desc = $('.heading h1').text();

    console.log(imageURL)

    $('.facebook').on('click', function(e){
		e.preventDefault();		
		var url = 'https://www.facebook.com/sharer/sharer.php?u='+currentURL;
        openNewWindow(url,'sharing','height=600,width=600,toolbar=no,scrollbars=no,resizable=yes');
	});

    $('.twitter').on('click', function(e){
        e.preventDefault();               
        var url = "https://twitter.com/intent/tweet?text="+desc+"&url="+currentURL;
        openNewWindow(url,'sharing','height=600,width=600,toolbar=no,scrollbars=no,resizable=yes');
    });
    $('.pinterest').on('click', function(e){
        e.preventDefault();            
        
        var url = 'http://pinterest.com/pin/create/button/?url='+currentURL+'&media='+img+'&description='+desc;
        openNewWindow(url,'sharing','height=600,width=600,toolbar=no,scrollbars=no,resizable=yes');
    });
    $('.google-plus').on('click', function(e){
    	e.preventDefault();    	
    	var url = "https://plus.google.com/share?url="+currentURL;
    	openNewWindow(url,'sharing','height=600,width=600,toolbar=no,scrollbars=no,resizable=yes');
    });

});