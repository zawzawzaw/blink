$(function(){
	$('#menu-logo-wrapper').addClass('white-version');

	///////
	///////   	

	$('#category').jplist({				
		itemsBox: '.list',
		itemPath: '.list-item',
		panelPath: '.jplist-panel',
		effect: 'fade',
		noResults: '.jplist-no-results'
	});
});