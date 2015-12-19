$(function() {

	$('.grid').masonry({
	  itemSelector: '.grid-item',
	  columnWidth: '.grid-sizer',
	  gutter: '.gutter-sizer'
	});

	// ,
	//   gutter: '.gutter-sizer'

	$('.grid-2').masonry({
	  itemSelector: '.grid-item-2',
	  columnWidth: '.grid-sizer-2',
	  gutter: '.gutter-sizer-2'
	});	
});