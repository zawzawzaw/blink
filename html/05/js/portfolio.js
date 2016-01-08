var source = $("#list-item-template").html();
var template = Handlebars.compile(source);
var data = {};

var counter = [];
	counter['all'] = 0;
	counter['hotels'] = 0;
	counter['resorts'] = 0;

var hotels = [
	{
		image: "images/content/portfolio/img-placeholder.jpg",
		location: "Zhengzhou, China",
		name: "Indigo Zheng Zhou",
		type: "hotels interiordesign masterplanning"
	},	
	{
		image: "images/content/portfolio/img-placeholder.jpg",
		location: "Bangkok, Thailand",
		name: "Kokotel Bangkok",
		type: "hotels"
	},	
	{
		image: "images/content/portfolio/img-placeholder.jpg",
		location: "Jaipur, India",
		name: "Novotel Jaipur",
		type: "hotels"
	},	
	{
		image: "images/content/portfolio/img-placeholder.jpg",
		location: "Xian, China",
		name: "Regent Xi'An",
		type: "hotels"
	},	
	{
		image: "images/content/portfolio/img-placeholder.jpg",
		location: "Taipei, China",
		name: "Regent Taipei",
		type: "hotels"
	},	
	{
		image: "images/content/portfolio/img-placeholder.jpg",
		location: "Seoul, South Korea",
		name: "Sheraton Grande Walkerhill Restaurants",
		type: "hotels"
	},	
	{
		image: "images/content/portfolio/img-placeholder.jpg",
		location: "Shanghai, China",
		name: "Shimao Hongqiao Mini Hotel",
		type: "hotels"
	}
];

var resorts = [
	{
		image: "images/content/portfolio/img-placeholder.jpg",
		location: "Sanya, China",
		name: "Doubletree Sanya",
		type: "resorts"
	},
	{
		image: "images/content/portfolio/img-placeholder.jpg",
		location: "Bali, Indonesia",
		name: "Fairmont Sanur Beach Bali",
		type: "resorts"
	},
	{
		image: "images/content/portfolio/img-placeholder.jpg",
		location: "Goa, India",
		name: "Hilton Goa",
		type: "resorts"
	},
	{
		image: "images/content/portfolio/img-placeholder.jpg",
		location: "Republic of Korea",
		name: "Hyatt Regency Jeju",
		type: "resorts"
	},
	{
		image: "images/content/portfolio/img-placeholder.jpg",
		location: "Krabi, Thailand",
		name: "Krabi Resort",
		type: "resorts"
	},
	{
		image: "images/content/portfolio/img-placeholder.jpg",
		location: "Ningbo, China",
		name: "Miaonong Resort",
		type: "resorts"
	},
	{
		image: "images/content/portfolio/img-placeholder.jpg",
		location: "Jeju Island, South Korea",
		name: "Podo",
		type: "resorts"
	},
	{
		image: "images/content/portfolio/img-placeholder.jpg",
		location: "Istanbu, Turkey",
		name: "Princes' Palace Resort & Spa",
		type: "resorts"
	},
	{
		image: "images/content/portfolio/img-placeholder.jpg",
		location: "Hefei, China",
		name: "Qianshen Spa & Hotel",
		type: "resorts"
	},
	{
		image: "images/content/portfolio/img-placeholder.jpg",
		location: "Jakarta, Indonesia",
		name: "Regent Jakarta",
		type: "resorts"
	},
	{
		image: "images/content/portfolio/img-placeholder.jpg",
		location: "Samui, Thailand",
		name: "Samui Resort",
		type: "resorts"
	},	
	{
		image: "images/content/portfolio/img-placeholder.jpg",
		location: "Bali, Indonesia",
		name: "Sarasvati, A Luxury Collection Resort",
		type: "resorts"
	},	
	{
		image: "images/content/portfolio/img-placeholder.jpg",
		location: "Mactan Island, Cebu, Philipines",
		name: "Sheraton Mactan",
		type: "resorts"
	},	
	{
		image: "images/content/portfolio/img-placeholder.jpg",
		location: "Xishuangbanna, China",
		name: "Wanda Reign XSBN",
		type: "resorts"
	}
]

data['all'] = hotels.concat(resorts);
data['resorts'] = resorts;
data['hotels'] = hotels;

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
		$('.category-nav').find('.active-cat').removeClass('active-cat');
		$(this).addClass('active-cat');

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

	// add more project (where this needs to be ajax data source or json)
	$('.show-more').on('click', function(e){
		e.preventDefault();
		var activeCat = $('.active-cat').data('hash').substring(1);

		if(activeCat!='all') {

			var newdata = {};		

			if(parseInt(counter[activeCat])<1 && parseInt(counter['all'])<1) {

				newdata['items'] = data[activeCat];

				var html = template(newdata);				
				
				// add item to jplist collection (as last item)
				if(html) {
					
					addToList(html);
				   	counter[activeCat] = 1;
				}

			}

		}else {

			///// hotels

			var newdata = {};

			if(parseInt(counter[activeCat])<1 && parseInt(counter['hotels'])<1) {

				newdata['items'] = data['hotels'];

				var html = template(newdata);				
										
				if(html) {
					
					addToList(html);				   	
				}

			}

			///// resorts

			var newdata = {};

			if(parseInt(counter[activeCat])<1 && parseInt(counter['resorts'])<1) {

				newdata['items'] = data['resorts'];

				var html = template(newdata);				
										
				if(html) {
					
					addToList(html);				   	
				}

			}

			counter[activeCat] = 1;

		}
		
	   	
	});


	/////
	/////

	function findTextFromHash(hash) {	
		$('.category-nav').find('.active-cat').removeClass('active-cat');
		return $childMenu.find("a[data-hash='" + hash + "']").addClass('active-cat').text();
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

	$('.all-category').trigger('click');

	///////
	///////   	

	$('#category').jplist({				
		itemsBox: '.list',
		itemPath: '.list-item',
		panelPath: '.jplist-panel',
		effect: 'fade'
	});
	
});