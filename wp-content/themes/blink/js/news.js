$(function(){
	// $('#menu-logo-wrapper').addClass('white-version');

	///////
	///////   	

	// var source = $("#list-item-template").html(),
	// 	template = Handlebars.compile(source),
	var data = [],
		counter = [];
		counter['mc'] = 1;
		counter['pr'] = 1;

	// data['mc_1'] = [
	// 	{
	// 		"date": "Nov 2014",
	// 		"title": "TTR Weekly",
	// 		"content": "Blinking Big Ideas",
	// 		"link": "http://www.ttrweekly.com/site/2014/11/blinking-big-ideas/"
	// 	},
	// 	{
	// 		"date": "Nov 2014",
	// 		"title": "Hotelier Indonesia",
	// 		"content": "Luxury Hospitality Design Roundtable Declares Specialisation and Segmentation as the New Watchwords",
	// 		"link": "http://hotelier-indonesia.com/news/luxury-hospitality-design-roundtable-declares-specialisation-and-segmentation-as-the-new-watchwords/"
	// 	},
	// 	{
	// 		"date": "Sep 2014",
	// 		"title": "Hotel Executive",
	// 		"content": "The Agony and Ecstasy of Creating Unique Hotels",
	// 		"link": "http://hotelexecutive.com/business_review/4080/the-agony-and-ecstasy-of-creating-unique-hotels"
	// 	},
	// 	{
	// 		"date": "Sep 2014",
	// 		"title": "Global Hotel Network",
	// 		"content": "Clint Nagata: Why Authenticity Matters",
	// 		"link": "http://www.globalhotelnetwork.com/resources/columns/perspectives/ClintNagata_b.pdf"
	// 	},
	// 	{
	// 		"date": "Aug 2014",
	// 		"title": "THE PEAK HONG KONG",
	// 		"content": "The High Life: \"The Pad on the Peak\"",
	// 		"link": "http://www.blinkdg.com/images/pdf/buzz/blink%20the%20peak%20feature_design%20challenge_op.pdf"
	// 	},
	// 	{
	// 		"date": "Aug 2014",
	// 		"title": "Singapore Tatler",
	// 		"content": "The Dapper Man: Christopher Chua",
	// 		"link": "http://sg.asiatatler.com/style/fashion/the-dapper-man-christopher-chua"
	// 	},
	// 	{
	// 		"date": "Aug 2014",
	// 		"title": "ETB News",
	// 		"content": "BLINK Design Group Marches into Greater China at Double Time",
	// 		"link": "http://asia.etbnews.com/219402/blink-design-group-marches-greater-china-double-time/"
	// 	},
	// 	{
	// 		"date": "July 2014",
	// 		"title": "Casaviva",
	// 		"content": "Clint Nagata",
	// 		"link": "http://www.blinkdg.com/images/pdf/buzz/cassaviva%20clint%20nagata.pdf"
	// 	},
	// 	{
	// 		"date": "May 2014",
	// 		"title": "Conde Nast Traveller",
	// 		"content": "The Hot List 2014 Indonesia, Regent Bali",
	// 		"link": "http://www.cntraveller.com/awards/the-hot-list/hot-list-2014/regent-bali-indonesia"
	// 	},
	// 	{
	// 		"date": "May 2014",
	// 		"title": "Asian Hotel & Catering Times",
	// 		"content": "Christopher Chua becomes MD BLINK Design Group",
	// 		"link": "http://www.asianhotelandcateringtimes.com/christopher-chua-becomes-md-blink-design-group/"
	// 	},
	// 	{
	// 		"date": "May 2014",
	// 		"title": "Hotelier Indonesia",
	// 		"content": "BLINK's Key Role in Regent's Rebirth Picks up Design Award",
	// 		"link": "http://hotelier-indonesia.com/news/blinks-key-role-in-regent-rebirth-applauded-as-flagship-phuket-resort-picks-up-design-award/"
	// 	},
	// 	{
	// 		"date": "May 2014",
	// 		"title": "South China Morning Post",
	// 		"content": "Subtle Sophistication the Way Forward for Luxury Travellers in China",
	// 		"link": "http://www.scmp.com/magazines/style/article/1500681/room-grow"
	// 	},
	// 	{
	// 		"date": "May 2014",
	// 		"title": "Asian Hotel & Catering Times",
	// 		"content": "Embrace Authenticity, creative design and practicality for success, roundtable hears",
	// 		"link": "http://www.asianhotelandcateringtimes.com/embrace-authenticity-creative-design-practicality-success-roundtable-hears/"
	// 	},
	// 	{
	// 		"date": "Apr 2014",
	// 		"title": "The Milliardaire",
	// 		"content": "Jumeirah Dhevanafushi, A Stunning Sanctuary",
	// 		"link": "http://www.themilliardaire.co/hotspot/jumeirah-dhevanafushi-maldives-10187/"
	// 	},
	// 	{
	// 		"date": "Feb 2014",
	// 		"title": "FORM",
	// 		"content": "GutFeel Architecture",
	// 		"link": "http://www.blinkdg.com/images/pdf/buzz/form%20and%20room%20feb%202014%20chris%20chua.pdf"
	// 	},
	// 	{
	// 		"date": "Jan 2014",
	// 		"title": "Perspective",
	// 		"content": "A Sense of Place",
	// 		"link": "http://www.blinkdg.com/images/pdf/buzz/perspective%20regent%20phuket%20jan14%20destination-1.pdf"
	// 	}
	// ];

	// data['mc_2'] = [
	// 	{
	// 		"date": "2013 - 2014",
	// 		"title": "Expat Society",
	// 		"content": "The 300 List",
	// 		"link": "http://www.blinkdg.com/images/pdf/buzz/expat%20society_2013-2014_dec13_2014.01.09.pdf"
	// 	},
	// 	{
	// 		"date": "Nov 2013",
	// 		"title": "Interior Design",
	// 		"content": "10 Questions with... BLINK Design Group",
	// 		"link": "http://www.pattayamail.com/property/hospitality-design-firm-blink-sets-up-new-hq-in-stylish-sathorn-29850"
	// 	},
	// 	{
	// 		"date": "Sep 2013",
	// 		"title": "Pattaya Mail",
	// 		"content": "Hospitality design firm BLINK sets up new HQ in stylish Sathorn",
	// 		"link": "http://www.interiordesign.net/articles/detail/35803-10-questions-with-blink-design-group/"
	// 	},
	// 	{
	// 		"date": "Jul 2013",
	// 		"title": "Singapore Tatler",
	// 		"content": "Purist Pursuits",
	// 		"link": "http://www.blinkdg.com/images/pdf/buzz/stjul13-christopher%20chua.pdf"
	// 	},
	// 	{
	// 		"date": "Jul 2013",
	// 		"title": "Think Design",
	// 		"content": "BLINK",
	// 		"link": "http://www.blinkdg.com/images/pdf/buzz/think%20design%20july%202013.pdf"
	// 	},
	// 	{
	// 		"date": "Jun 2013",
	// 		"title": "The Edge",
	// 		"content": "Here to Stay",
	// 		"link": "http://www.blinkdg.com/images/pdf/buzz/june%202013%20the%20edge%20chris%20chua.pdf"
	// 	},
	// 	{
	// 		"date": "Mar 2013",
	// 		"title": "Perspective",
	// 		"content": "In the BLINK of an Eye",
	// 		"link": "http://www.blinkdg.com/images/pdf/buzz/blink%20perspective%20march%202013%20clint%20nagata%20profile%20low%202.pdf"
	// 	},
	// 	{
	// 		"date": "Apr 2013",
	// 		"title": "The Nation",
	// 		"content": "BLINK Puts its Marker on the Sand at Two Beach Resorts",
	// 		"link": "http://www.blinkdg.com/images/pdf/buzz/blink_the%20nation%2026%20april%202013.pdf"
	// 	},
	// 	{
	// 		"date": "Mar 2013",
	// 		"title": "People's Daily Online",
	// 		"content": "China, an exciting canvas for hospitality design",
	// 		"link": "http://english.peopledaily.com.cn/205040/8172131.html"
	// 	},
	// 	{
	// 		"date": "Mar 2013",
	// 		"title": "China Daily",
	// 		"content": "Gimme Shelter",
	// 		"link": "http://www.blinkdg.com/images/pdf/buzz/china%20daily%20march%2017%202013s.pdf"
	// 	},
	// 	{
	// 		"date": "Jan 2013",
	// 		"title": "The Nation",
	// 		"content": "Blink brings more lustre and luxury to Bali and Phuket",
	// 		"link": "http://www.blinkdg.com/images/pdf/buzz/thenation-11jan2013.pdf"
	// 	},
	// 	{
	// 		"date": "Jan 2013",
	// 		"title": "Cocotraie",
	// 		"content": "The Rising Star in Hospitality Design",
	// 		"link": "http://www.blinkdg.com/images/pdf/buzz/cocotraie_jumeirah_dhevanafushi_resort-2.2.pdf"
	// 	}
	// ];

	// data['mc_3'] = [
	// 	{
	// 		"date": "December 2012",
	// 		"title": "4Hoteliers",
	// 		"content": "BLINK design moves into China",
	// 		"link": "http://www.4hoteliers.com/4hots_nshw.php?mwi=10730"
	// 	},
	// 	{
	// 		"date": "December 2012",
	// 		"title": "Spa Opportunities",
	// 		"content": "Blink Design Group wins three key design projects",
	// 		"link": "http://www.blinkdg.com/images/pdf/buzz/spaopportunities%205%20dec.pdf"
	// 	},
	// 	{
	// 		"date": "August 2012",
	// 		"title": "TTG Asia",
	// 		"content": "How to be Relevant",
	// 		"link": "http://www.blinkdg.com/images/pdf/buzz/ttg%20asia%20october%202012.pdf"
	// 	},
	// 	{
	// 		"date": "July 2012",
	// 		"title": "Perspective",
	// 		"content": "My Blue Heaven",
	// 		"link": "http://www.blinkdg.com/images/pdf/buzz/perspective%20july%202012.pdf"
	// 	},
	// 	{
	// 		"date": "June 2012",
	// 		"title": "The Centurion",
	// 		"content": "Blinking Ahead",
	// 		"link": "http://www.blinkdg.com/images/pdf/buzz/centurion%20online%20june%202012.pdf"
	// 	},
	// 	{
	// 		"date": "May 2012",
	// 		"title": "Conde Nast Traveller",
	// 		"content": "The Hot List 2012",
	// 		"link": "http://www.blinkdg.com/images/pdf/buzz/conde%20nast%20traveller%20may%202012.pdf"
	// 	},
	// 	{
	// 		"date": "May 2012",
	// 		"title": "Sleeper China",
	// 		"content": "Design Perspectives",
	// 		"link": "http://www.blinkdg.com/images/pdf/buzz/sleeper%20china%20may%202012.pdf"
	// 	},
	// 	{
	// 		"date": "May 2012",
	// 		"title": "4 Hoteliers",
	// 		"content": "BLINK scoops 2012 HD design award with Conrad Sanya, China",
	// 		"link": "http://www.blinkdg.com/images/pdf/buzz/4%20hoteliers%20may%202012.pdf"
	// 	},
	// 	{
	// 		"date": "May 2012",
	// 		"title": "Indepth",
	// 		"content": "Phuket Design",
	// 		"link": "http://www.blinkdg.com/images/pdf/buzz/indepth%20phuket%20design%20may%202012.pdf"
	// 	},
	// 	{
	// 		"date": "May 2012",
	// 		"title": "Phuketwan",
	// 		"content": "Phuket ResortWATCH: Butlers on Tap",
	// 		"link": "http://www.blinkdg.com/images/pdf/buzz/phuketwan%20may%202012.pdf"
	// 	},
	// 	{
	// 		"date": "Feb 2012",
	// 		"title": "Queensland Times",
	// 		"content": "New 'Unique Island' Hotel",
	// 		"link": "http://www.blinkdg.com/images/pdf/buzz/queensland%20times%20feb%202012.pdf"
	// 	},
	// 	{
	// 		"date": "Jan 2012",
	// 		"title": "TTG Mice",
	// 		"content": "Venue Check",
	// 		"link": "http://www.blinkdg.com/pdf/buzz/Blink_TTG_Mice_Jan2012.pdf"
	// 	}
	// ];

	function addToList(html, category) {
		clean_html = html.replace(/\n/g, "").replace(/[\t ]+\</g, "<").replace(/\>[\t ]+\</g, "><").replace(/\>[\t ]+$/g, ">");

		$('#'+category+' .lists').append(clean_html);
	}

	function createTemplate(category) {
    	var source = $("#"+category+"-template").html(),
			template = Handlebars.compile(source);

		return template;
    }

	function addToTemplate(data, type){
		var newdata = {};

		// if(category.indexOf("mc") >= 0) {
		// 	var type = 'mediacoverage';
		// }else {
		// 	var type = 'pressreleases';
		// }

		if(data.length > 0) {		
			newdata['items'] = data;

			console.log(newdata);

			var template = createTemplate(type);
			var html = template(newdata);
			
			if(html)
				addToList(html, type);	
		}else {
			$('#'+type+' .show-more').toggleClass('hide-this');
		}
		   	
	}



	// $('#category').jplist({				
	// 	itemsBox: '.list',
	// 	itemPath: '.list-item',
	// 	panelPath: '.jplist-panel',
	// 	effect: 'fade',
	// 	noResults: '.jplist-no-results'
	// });

	$('.news-type').on('click', function(e){
		e.preventDefault();

		var gotoelement = $(this).attr('href');
		
		var target_y = $(gotoelement).offset().top - 75;

        TweenMax.to($(window), 1.2, {
            scrollTo: { y:target_y, autoKill: false }, 
            ease:Quad.easeInOut            
        });
	});

	$('#mediacoverage .show-more').on('click', function(e){
		e.preventDefault();

		counter['mc'] += 1;

		$.getJSON(homeUrl+'/mediacoverage_json/'+counter['mc'], function(data) {
			addToTemplate(data, 'mediacoverage');
		});		
		
	});

	$('#pressreleases .show-more').on('click', function(e){
		e.preventDefault();

		counter['pr'] += 1;

		$.getJSON(homeUrl+'/pressrelease_json/'+counter['pr'], function(data) {
			addToTemplate(data, 'pressreleases');
		});		
		
	});


 	var offset=3250, // At what pixels show Back to Top Button
    scrollDuration=300; // Duration of scrolling to top

    $(window).scroll(function() {
	    if ($(this).scrollTop() > offset) {
        	$('#return-to-top').fadeIn(500); // Time(in Milliseconds) of appearing of the Button when scrolling down.
        } else {
			$('#return-to-top').fadeOut(500); // Time(in Milliseconds) of disappearing of Button when scrolling up.
		}
	});

	// Smooth animation when scrolling
	$('#return-to-top').click(function(event) {
		event.preventDefault();
    	$('html, body').animate({ scrollTop: 0 }, scrollDuration);
	});
});