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
		$('.category-nav').find('.active').removeClass('active');
		$(this).addClass('active');

		var hash = $(this).attr('href');		

		if(hash=='#all' || hash=="#signaturebyblink" || hash == "#"){
			$('#default-radio').trigger('click');
			$filterTitle.hide();
		}else {
			$(hash).trigger('click');
			$filterTitle.show();
			$filterTitle.text($(this).text());
		}
	});

	$portfolioMenuItem.on('click', function(e){
		var url = $(this).attr('href');

		changeFilterText(url);
		
	});

	$('.show-more').on('click', function(e){
		var html = '<li class="list-item"><div class="hotels"><div class="img-holder"><img src="images/content/portfolio/portfolio-content-1.jpg" alt=""></div><div class="caption-text"><h6>NEW</h6><h5>New Hotels</h5></div></div></li>',
			$el = $(html);
		
		//add item to jplist collection (as last item)
	   	$('#category').jplist({
	      	command: 'add',
	      	commandData: {
	        	$item: $el
	      	}
	   	});

	});


	/////
	/////

	function findTextFromHash(hash) {	
		$('.category-nav').find('.active').removeClass('active');
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
			$('#default-radio').trigger('click');
			$filterTitle.hide();
		}else {
			$(hash).trigger('click');
			$filterTitle.show();
			var filtered_title = findTextFromHash(hash);
			$filterTitle.text(filtered_title);
		}
	}

	changeFilterText();

	///////
	///////   	

	$('#category').jplist({				
		itemsBox: '.list',
		itemPath: '.list-item',
		panelPath: '.jplist-panel',
		effect: 'fade'
	});
	
});