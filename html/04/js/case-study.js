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