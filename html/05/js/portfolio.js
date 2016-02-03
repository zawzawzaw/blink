var source = $("#list-item-template").html(),
	template = Handlebars.compile(source),
	data = {},
	hotels = [],
	resorts = [],
	counter = [];
	counter['all'] = 0;
	counter['hotels'] = 0;
	counter['resorts'] = 0;

$.getJSON('json/hotels.json', function(data) {
  	hotels = data;
  	assignData();
});

$.getJSON('json/resorts.json', function(data) {
  	resorts = data;
  	assignData();
});

function assignData(){
	data['all'] = hotels.concat(resorts);
	data['resorts'] = resorts;
	data['hotels'] = hotels;
}


$(function(){

	$('#menu-logo-wrapper').addClass('white-version');
	$('#mobile-menu-logo-wrapper').addClass('white-version');
	
	var $filter = $('.filter'),
		$filterCategory = $('.filter-category'),
		$filterTitle = $('.filtered-title'),
		$childMenu = $('.child-menu'),
		$portfolioMenuItem = $('.portfolio-sub-nav ul li a'),		
		$showMoreBtn = $('.show-more');		

	// $filter.on('click', function(e){

	// 	e.preventDefault();
	// 	$childMenu.toggleClass('show');

	// });

	$filterCategory.on('click', function(e){

		e.preventDefault();

		addClassToActiveCategory($(this));

		var hash = $(this).attr('href');

		filterByCategory(false, hash);

	});

	$portfolioMenuItem.on('click', function(e){

		var url = $(this).attr('href');

		filterByCategory(url, false);
		
	});	

	/////
	/////

	function addClassToActiveCategory($this){
		$('.category-nav').find('.active-cat').removeClass('active-cat');
		$this.addClass('active-cat');
	}

	function findTextFromHash(hash) {	
		$('.category-nav').find('.active-cat').removeClass('active-cat');
		return $childMenu.find("a[data-hash='" + hash + "']").addClass('active-cat').text();
	}

	function getHashFromUrl(url) {
		if(url.indexOf('#')!=-1	) {
			return url.substring(url.indexOf('#'));			
		}

		return false;		
	}

	function filterByCategory(url, hash) {
		if(!hash) {
			if(!url) 
				var url = window.location.href;			

			var hash = getHashFromUrl(url);	
		}

		$showMoreBtn.show();

		if(hash=='#all' || hash=="#signaturebyblink" || hash == "#"){
			$('#default-radio').trigger('click');
			$filterTitle.hide();
		}else {
			if(hash!='#hotels'&&hash!='#resorts')
				$showMoreBtn.hide();

			$(hash).trigger('click');
			$filterTitle.show();
			var filtered_title = findTextFromHash(hash);
			$filterTitle.text(filtered_title);
		}		
	}

	/////
	/////

	function addToList(html) {
		clean_html = html.replace(/\n/g, "").replace(/[\t ]+\</g, "<").replace(/\>[\t ]+\</g, "><").replace(/\>[\t ]+$/g, ">");			
		$el = $(clean_html);

		$('#category').jplist({
	      	command: 'add',
	      	commandData: {
	        	$item: $el
	      	}
	   	});	
	}

	function addToTemplate(category){
		var newdata = {};

		newdata['items'] = data[category];

		var html = template(newdata);
		
		if(html)
			addToList(html);
		else
			$showMoreBtn.hide();
		   	
	}

	$('.show-more').on('click', function(e){

		e.preventDefault();

		var activeCat = $('.active-cat').data('hash').substring(1);		

		if(activeCat!='all') {			

			if(parseInt(counter[activeCat])<1 && parseInt(counter['all'])<1) {

				addToTemplate(activeCat);				

			}

			counter[activeCat] += 1;

		}else {

			///// hotels

			if(parseInt(counter[activeCat])<1 && parseInt(counter['hotels'])<1) {

				addToTemplate('hotels');

			}

			///// resorts

			if(parseInt(counter[activeCat])<1 && parseInt(counter['resorts'])<1) {

				addToTemplate('resorts');

			}

			counter[activeCat] += 1;

		}
	   	
	});

	//////
	//////

	function init(){
		var url = window.location.href;
		var hash = getHashFromUrl(url);

		if(hash=='#all' || hash=="#signaturebyblink" || hash == "#" || !hash){
			$('.all-category').trigger('click');			
		}else {
			$('.child-menu li a[href="'+hash+'"]').trigger('click');
		}
	}	

	init();

	///////
	///////   	

	$('#category').jplist({				
		itemsBox: '.list',
		itemPath: '.list-item',
		panelPath: '.jplist-panel',
		effect: 'fade'
	});
	
});