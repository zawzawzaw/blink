var source = $("#list-item-template").html();
var template = Handlebars.compile(source);
var data = {};

var counter = [];
	counter['all'] = 0;
	counter['hotels'] = 0;
	counter['resorts'] = 0;

var hotels = [
	{
		image: "images/content/portfolio/project-indigo-zheng-zhou-thumb.jpg",
		location: "Zhengzhou, China",
		name: "Indigo Zheng Zhou",
		type: "hotels interiordesign masterplanning",
		url: "project-indigo-zheng-zhou.html"
	},	
	{
		image: "images/content/portfolio/project-kokotel-bangkok-thumb.jpg",
		location: "Bangkok, Thailand",
		name: "Kokotel Bangkok",
		type: "hotels",
		url: "project-kokotel-bangkok.html"
	},	
	{
		image: "images/content/portfolio/project-novotel-jaipur-thumb.jpg",
		location: "Jaipur, India",
		name: "Novotel Jaipur",
		type: "hotels",
		url: "project-novotel-jaipur.html"
	},	
	{
		image: "images/content/portfolio/project-regent-xi-an-thumb.jpg",
		location: "Xian, China",
		name: "Regent Xi'An",
		type: "hotels",
		url: "project-regent-xi-an.html"
	},	
	{
		image: "images/content/portfolio/project-regent-taipei-thumb.jpg",
		location: "Taipei, China",
		name: "Regent Taipei",
		type: "hotels",
		url: "project-regent-taipei.html"
	},	
	{
		image: "images/content/portfolio/project-sheraton-grande-walkerhill-restaurants-thumb.jpg",
		location: "Seoul, South Korea",
		name: "Sheraton Grande Walkerhill Restaurants",
		type: "hotels",
		url: "project-sheraton-grande-walkerhill-restaurants.html"
	},	
	{
		image: "images/content/portfolio/project-shimao-hongqiao-mini-hotel-thumb.jpg",
		location: "Shanghai, China",
		name: "Shimao Hongqiao Mini Hotel",
		type: "hotels",
		url: "project-shimao-hongqiao-mini-hotel.html"
	}
];

var resorts = [
	{
		image: "images/content/portfolio/project-double-tree-sanya-thumb.jpg",
		location: "Sanya, China",
		name: "Doubletree Sanya",
		type: "resorts",
		url: "project-double-tree-sanya.html"
	},
	{
		image: "images/content/portfolio/project-fairmont-sanur-beach-bali-thumb.jpg",
		location: "Bali, Indonesia",
		name: "Fairmont Sanur Beach Bali",
		type: "resorts",
		url: "project-fairmont-sanur-beach-bali.html"
	},
	{
		image: "images/content/portfolio/project-hilton-goa-thumb.jpg",
		location: "Goa, India",
		name: "Hilton Goa",
		type: "resorts",
		url: "project-hilton-goa.html"
	},
	{
		image: "images/content/portfolio/project-hyatt-regency-jeju-thumb.jpg",
		location: "Republic of Korea",
		name: "Hyatt Regency Jeju",
		type: "resorts",
		url: "project-hyatt-regency-jeju.html"
	},
	{
		image: "images/content/portfolio/project-krabi-resort-thumb.jpg",
		location: "Krabi, Thailand",
		name: "Krabi Resort",
		type: "resorts",
		url: "project-krabi-resort.html"
	},
	{
		image: "images/content/portfolio/project-miaonong-resort-thumb.jpg",
		location: "Ningbo, China",
		name: "Miaonong Resort",
		type: "resorts",
		url: "project-miaonong-resort.html"
	},
	{
		image: "images/content/portfolio/project-podo-thumb.jpg",
		location: "Jeju Island, South Korea",
		name: "Podo",
		type: "resorts",
		url: "project-podo.html"
	},
	{
		image: "images/content/portfolio/project-princes-palace-resort-and-spa-thumb.jpg",
		location: "Istanbu, Turkey",
		name: "Princes' Palace Resort & Spa",
		type: "resorts",
		url: "project-princes-palace-resort-and-spa.html"
	},
	{
		image: "images/content/portfolio/project-qianshen-spa-and-hotel-thumb.jpg",
		location: "Hefei, China",
		name: "Qianshen Spa & Hotel",
		type: "resorts",
		url: "project-qianshen-spa-and-hotel.html"
	},
	{
		image: "images/content/portfolio/project-regent-jakarta-thumb.jpg",
		location: "Jakarta, Indonesia",
		name: "Regent Jakarta",
		type: "resorts",
		url: "project-regent-jakarta.html"
	},
	{
		image: "images/content/portfolio/project-samui-resort-thumb.jpg",
		location: "Samui, Thailand",
		name: "Samui Resort",
		type: "resorts",
		url: "project-samui-resort.html"
	},	
	{
		image: "images/content/portfolio/project-sarasvati-a-luxury-collection-resort-thumb.jpg",
		location: "Bali, Indonesia",
		name: "Sarasvati, A Luxury Collection Resort",
		type: "resorts",
		url: "project-sarasvati-a-luxury-collection-resort.html"
	},	
	{
		image: "images/content/portfolio/project-sheraton-mactan-thumb.jpg",
		location: "Mactan Island, Cebu, Philipines",
		name: "Sheraton Mactan",
		type: "resorts",
		url: "project-sheraton-mactan.html"
	},	
	{
		image: "images/content/portfolio/project-wanda-reign-xsbn-thumb.jpg",
		location: "Xishuangbanna, China",
		name: "Wanda Reign XSBN",
		type: "resorts",
		url: "project-wanda-reign-xsbn.html"
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
		$portfolioMenuItem = $('.portfolio-sub-nav ul li a'),		
		$showMoreBtn = $('.show-more');		

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
		if(url.indexOf('#')!=-1	) {
			return url.substring(url.indexOf('#'));			
		}

		return false;		
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

	function init(){
		var url = window.location.href;
		var hash = getHashFromUrl(url);

		console.log(hash);

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