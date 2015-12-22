$(function(){
	var $filter = $('.filter'),
		$filterCategory = $('.filter-category'),
		$filterTitle = $('.filtered-title'),
		$childMenu = $('.child-menu'),
		$portfolioMenuItem = $('.portfolio-sub-nav ul li a');


	$filter.on('click', function(e){
		e.preventDefault();
		$childMenu.toggleClass('show');
	});

	$filterCategory.on('click', function(e){
		e.preventDefault();
		$('.active').removeClass('active');
		$(this).addClass('active')

		if($(this).attr('href')=='#all'){
			$filterTitle.hide();
		}else {
			$filterTitle.show();
			$filterTitle.text($(this).text());
		}
	});

	$portfolioMenuItem.on('click', function(e){
		var url = $(this).attr('href');

		changeFilterText(url);
		
	})


	/////
	/////

	function findTextFromHash(hash) {	
		return $childMenu.find("a[data-hash='" + hash + "']").addClass('active').text();
	}

	function getHashFromUrl(url) {
		return url.substring(url.indexOf('#'));		
	}


	function changeFilterText(url) {
		if(!url) {
			var url = window.location.href;			
		}
		var hash = getHashFromUrl(url);

		if(hash=='#all' || hash=="#signaturebyblink" || hash == "#"){
			$filterTitle.hide();
		}else {
			$filterTitle.show();
			var filtered_title = findTextFromHash(hash);
			$filterTitle.text(filtered_title);
		}
	}

	changeFilterText();
	
});