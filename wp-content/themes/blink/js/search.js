$(function(){
	$('#menu-logo-wrapper').addClass('white-version');
	$('#mobile-menu-logo-wrapper').addClass('white-version');

    var search_json = [];

    search_json['contacts'] = [
    	{
    		"title": "ENQUIRIES - GENERAL INFORMATION",
    		"description": "For general inquiries and other requests please contact info@blinkdg.com.",
    		"url": "contact-us"
    	},
    	{
    		"title": "ENQUIRIES - PRESS INQUIRIES",
    		"description": "For information and media on our past, current, or upcoming projects: press@blinkdg.com",
    		"url": "contact-us"
    	},
    	{
    		"title": "ENQUIRIES - NEW BUSINESS",
    		"description": "For all enquiries and requests regarding new projects, including RFQ/RFP and competition invitations: new-business@blinkdg.com",
    		"url": "contact-us"
    	},
    	{
    		"title": "ENQUIRIES - CAREERS",
    		"description": "For information about career opportunities: careers@blinkdg.com",
    		"url": "contact-us"
    	},
    	{
    		"title": "BLINK OFFICES - BANGKOK",
    		"description": "BLINK Design Group Co. Ltd. 179 Bangkok City Tower, 30th Floor South Sathorn Road Bangkok 10120 Thailand T +66 2679 6818 | F +66 2679 6819",
    		"url": "contact-us"
    	},
    	{
    		"title": "BLINK OFFICES - NEW DEHLI",
    		"description": "NEW DELHI BLINK Design Private Limited 59 Okhla Industrial Estate Ph-III New Delhi 110 020 India T +91 11473 73000 | F +91 11473 73099",
    		"url": "contact-us"
    	},
    	{
    		"title": "BLINK OFFICES - SINGAPORE",
    		"description": "BLINK Design Group Pte. Ltd. 306 Tanglin Road Phoenix Park Office Campus Singapore 247973 T +65 6423 9516 | F +65 6222 8916",
    		"url": "contact-us"
    	},
    	{
    		"title": "BLINK OFFICES - SHANGHAI",
    		"description": "BLINK (Shanghai) Co. Ltd. Unit 331, B3 570 Yongjia Court Shanghai, China T +86 21 6415 6266 | F +86 138 1600 3663",
    		"url": "contact-us"
    	}
    ];

    search_json['careers'] = [
    	{
    		"title": "DESIGN YOUR FUTURE",
    		"description": "BLINK is internationally acclaimed for captivating design. We work in a studio environment that encourages everyone to do their best work, with the best people, for the best clients. We specialize in hospitality projects from lifestyle to luxury, with integrated services that include interior design, building design, master planning, and brand design.",
    		"url": "careers"
    	},
    	{
    		"title": "WHAT OUR CLIENTS SAY ABOUT US",
    		"description": "EXPERIENCED, DYNAMIC, FULL–SERVICE, EASY–GOING, FLEXIBLE, RELIABLE, PROFESSIONAL, YOUNG, CHARISMATIC, LIKABLE, PERSONABLE, CONTEMPORARY, SENSITIVE, HIGH–QUALITY, IMPRESSIVE, WONDERFUL, INSPIRING, THOROUGH, OPEN TO NEW IDEAS.",
    		"url": "careers"
    	},
    	{
    		"title": "INNOVATE · COLLABORATE · LEAD",
    		"description": "We offer opportunities for our practice leaders to provide clear vision and exceptional leadership; for our project leaders to drive innovation, integration, and evolution; and for our next-generation talent to develop their skills and accelerate their careers.",
    		"url": "careers"
    	},
    	{
    		"title": "EXPLORE OPPORTUNITY",
    		"description": "To build on this, we need YOU. If you are interested in a career with BLINK, we welcome an opportunity to discuss your career options. Please contact our Talent Center (TAC) directly — careers@blinkdg.com. We employ talented people from a broad range of disciplines and at all levels, from recent graduate to experienced professional. We prefer experience in an international architecture or interior design environment, including recent experience in the hospitality industry.",
    		"url": "careers"
    	},
    	{
    		"title": "WORKING AT BLINK",
    		"description": "Our international headquarters is in Bangkok, with offices in Singapore. Shanghai, and New Delhi. We are multi-cultural and multi-lingual. English is our common language, and fluency in other languages is an asset (especially Mandarin). BLINK’s core values are teamwork, integrity, and excellence. We welcome talented people who share these values and are eager to work in an environment where these are the guiding principles: Create value for our clients, our business partners, and our company. Work collaboratively and help each other succeed. Recruit talented people who share our core values. Recognise high-impact performance. Embrace change. Innovate and share knowledge. Communicate with clarity and respect. Behave and care because it is our company.",
    		"url": "careers"
    	},
    	{
    		"title": "LEAP FORWARD",
    		"description": "Open the gateway to your own potential. At BLINK, we believe in agility, collaboration, and excellence. All team members are leaders, and we seek members who have an innate ability and desire to motivate and inspire their teams to create real value every day. CAPABILITIES OPPORTUNITIES RELATIONSHIPS MANAGEMENT LEADERSHIP ACCELERATED LEADERSHIP DEVELOPMENT: 3 TO 5+ YEARS",
    		"url": "careers"
    	}
    ];

    search_json['insights'] = [
    	{
    		"title": "IN THE BLINK OF AN EYE",
    		"description": "Design can hit you between the eyes or reveal itself through discoveries. It must be unique, functional, elegant, and engaging — instinctively brilliant. BLINK designers believe that each adventure undertaken by the firm should see boundaries pushed back, preconceptions shattered, and expectations challenged. We thrive on brainstorming, the creative process, and collaboration with like-minded clients.",
    		"url": "insights"
    	},
    	{
    		"title": "IDEAS",
    		"description": "There can be as much value in the blink of an eye as in months of rational analysis. - Malcolm Gladwell, Blink: The Power of Thinking Without Thinking",
    		"url": "insights"
    	},
    	{
    		"title": "PULSE",
    		"description": "Bangkok and Singapore: 2 cities so close and yet such polar opposites. Each city has so much to offer in such different ways.",
    		"url": "insights"
    	},
    	{
    		"title": "STYLE",
    		"description": "Recently, Bali Style’s Adam Fenton had the chance to catch up with BLINK designer Clint Nagata for a fascinating chat.",
    		"url": "insights"
    	},
    	{
    		"title": "CHANGING THE GAME",
    		"description": "Coming soon — a look at our views on the rapidly changing market, along with featured profiles on our clients, hotel operators, consultants, and other influencers who are changing the game.",
    		"url": "insights"
    	}
    ];

    search_json['profile'] = [
    	{
    		"title": "ABOUT BLINK",
    		"description": "We’re different from other design firms. While the quality of our work speaks for itself, we make our case for design greatness one story at a time. We are committed to design excellence in the context of collaboration. These are our guiding principles throughout the design process. Our design is intended to be welcoming, centered on the uniqueness of a specific location. We explore vernacular style, history, and culture as rich sources of ideas — our designs are always authentic and in harmony with their surroundings. BLINK lives and breaths Asia, with offices in Bangkok, Singapore, New Delhi, and Shanghai. We are international, with projects from Istanbul to Bora Bora, the Maldives to Seoul. And we are citizens of the world — multi-lingual and multi-cultural, representing six of the seven continents.",
    		"url": "profile"
    	},
    	{
    		"title": "OUR LEADERS",
    		"description": "Our creativity is inspired by singular instinct and collaborative expertise. Meet a few of our leaders who are making that happen.",
    		"url": "profile"
    	},
    	{
    		"title": "CLINT NAGATA",
    		"description": "Founder & Chief Creative Director Bangkok",
    		"url": "profile"
    	},
    	{
    		"title": "CHRISTINE GERLIER",
    		"description": "Managing Director Bangkok",
    		"url": "profile"
    	},
    	{
    		"title": "CHRISTOPHER CHUA",
    		"description": "Managing Director Singapore",
    		"url": "profile"
    	},
    	{
    		"title": "MOOK LINDSAY",
    		"description": "Studio Director Bangkok",
    		"url": "profile"
    	},
    	{
    		"title": "PIETRO CAMPANELLA",
    		"description": "Associate Director Singapore",
    		"url": "profile"
    	},  	
    	{
    		"title": "ZIA HANSEN",
    		"description": "Associate Director Bangkok",
    		"url": "profile"
    	},
    	{
    		"title": "WUTTHAYA WONGSAWAN",
    		"description": "Associate Director Bangkok",
    		"url": "profile"
    	},
    	{
    		"title": "LEE LIN",
    		"description": "Head, Business Development Bangkok",
    		"url": "profile"
    	},
    	{
    		"title": "ONG ART ​NGAMNARONGKIJ",
    		"description": "Head, Design Studio Bangkok",
    		"url": "profile"
    	},
    	{
    		"title": "How we work WHAT DOES IT MEAN TO THINKBLINK?",
    		"description": "We believe in a design concierge approach that makes our clients an integral part of the creative vision. We work together to take a dream and shape it into a composition that reflects the spirit of the place as well as the brand itself. Our clients tell us that we’re open to new ideas, and that we’re fun to work with. Energy and ideas spark from our youthful teams, guided by success that comes from experience. All of the elements — from the building and grounds to layouts, details, finishes, furniture, and accessories — reflect our client’s initial vision and operating parameters in a sophisticated symphony of space.",
    		"url": "profile"
    	}
    ];

  //   search_json['portfolio'] = [
  //   	{
		// 	"image": "images/content/portfolio/portfolio-content-1.jpg",
		// 	"location": "Maldives",
		// 	"name": "Jumeirah Dhevanfushi",
		// 	"type": "resorts interior design building design",
		// 	"url": "project/jumeirah-dhevanfushi"
		// },
		// {
		// 	"image": "images/content/portfolio/portfolio-content-2.jpg",
		// 	"location": "Benxi, China",
		// 	"name": "Benxi Doubletree by Hilton",
		// 	"type": "resorts building design master planning brand design",
		// 	"url": "project/benxi-doubletree-by-hilton"
		// },
		// {
		// 	"image": "images/content/portfolio/portfolio-content-3.jpg",
		// 	"location": "Sanya, China",
		// 	"name": "Conrad Sanya Haitang Bay",
		// 	"type": "resorts building design master planning",
		// 	"url": "project/benxi-doubletree-by-hilton"
		// },
		// {
		// 	"image": "images/content/portfolio/portfolio-content-4.jpg",
		// 	"location": "Fengxian, China",
		// 	"name": "Hilton Fengxian",
		// 	"type": "resorts interior design building design",
		// 	"url": "project/hilton-fenxian"
		// },
		// {
		// 	"image": "images/content/portfolio/portfolio-content-5.jpg",
		// 	"location": "Hainan, China",
		// 	"name": "Marriott Wenchang",
		// 	"type": "resorts building design master planning",
		// 	"url": "project/marriott-wenchang"
		// },
		// {
		// 	"image": "images/content/portfolio/portfolio-content-6.jpg",
		// 	"location": "Phuket, Thailand",
		// 	"name": "Regent Phuket Cape Panwa",
		// 	"type": "hotels interiordesign",
		// 	"url": "project/regent-phuket-cape-panwa"
		// },
		// {
		// 	"image": "images/content/portfolio/portfolio-content-7.jpg",
		// 	"location": "Nusa Dua, Bali, Indonesia",
		// 	"name": "Melia Bali",
		// 	"type": "resorts building design",
		// 	"url": "project/melia-bali/"
		// },
		// {
		// 	"image": "images/content/portfolio/portfolio-content-8.jpg",
		// 	"location": "Bali, Indonesia",
		// 	"name": "Six Senses Uluwatu",
		// 	"type": "resorts interior design master planning",
		// 	"url": "project/six-senses-uluwatu"
		// },
		// {
		// 	"image": "images/content/portfolio/project-hilton-ningbo-thumb.jpg",
		// 	"location": "Ningbo, China",
		// 	"name": "Hilton Ningbo",
		// 	"type": "resorts interior design brand design",
		// 	"url": "project/hilton-ningbo"
		// },
		// {
		// 	"image": "images/content/portfolio/portfolio-content-10.jpg",
		// 	"location": "Hailing, China",
		// 	"name": "Renaissance & Courtyard BY Marriott",
		// 	"type": "resorts building design master planning",
		// 	"url": "project/renaissance-courtyard-by-marriott"
		// },
		// {
		// 	"image": "images/content/portfolio/portfolio-content-11.jpg",
		// 	"location": "Sanya, China",
		// 	"name": "RAYCOM",
		// 	"type": "resorts master planning",
		// 	"url": "project/raycom/"
		// },
		// {
		// 	"image": "images/content/portfolio/project-travelodge-thumb.jpg",
		// 	"location": "Singapore",
		// 	"name": "TRAVELODGE",
		// 	"type": "hotels interior design",
		// 	"url": "project/travelodge/"
		// },
  //   	{
		// 	"image": "images/content/portfolio/project-indigo-zheng-zhou-thumb.jpg",
		// 	"location": "Zhengzhou, China",
		// 	"name": "Indigo Zheng Zhou",
		// 	"type": "hotels interior design master planning",
		// 	"url": "project/indigo-zheng-zhou"
		// },	
		// {
		// 	"image": "images/content/portfolio/project-kokotel-bangkok-thumb.jpg",
		// 	"location": "Bangkok, Thailand",
		// 	"name": "Kokotel Bangkok",
		// 	"type": "hotels interior design brand design",
		// 	"url": "project/kokotel-bangkok"
		// },	
		// {
		// 	"image": "images/content/portfolio/project-novotel-jaipur-thumb.jpg",
		// 	"location": "Jaipur, India",
		// 	"name": "Novotel Jaipur",
		// 	"type": "hotels interior design",
		// 	"url": "project/novotel-jaipur"
		// },	
		// {
		// 	"image": "images/content/portfolio/project-regent-xi-an-thumb.jpg",
		// 	"location": "Xian, China",
		// 	"name": "Regent Xi'An",
		// 	"type": "hotels master planning building design",
		// 	"url": "project/regent-xian"
		// },	
		// {
		// 	"image": "images/content/portfolio/project-regent-taipei-thumb.jpg",
		// 	"location": "Taipei, Taiwan",
		// 	"name": "Regent Taipei",
		// 	"type": "hotels interior design building design",
		// 	"url": "project/regent-taipei"
		// },	
		// {
		// 	"image": "images/content/portfolio/project-sheraton-grande-walkerhill-restaurants-thumb.jpg",
		// 	"location": "Seoul, South Korea",
		// 	"name": "Sheraton Grande Walkerhill Restaurants",
		// 	"type": "hotels interior design brand design",
		// 	"url": "project/sheraton-grande-walkerhill-restaurants"
		// },	
		// {
		// 	"image": "images/content/portfolio/project-shimao-hongqiao-mini-hotel-thumb.jpg",
		// 	"location": "Shanghai, China",
		// 	"name": "Shimao Hongqiao Mini Hotel",
		// 	"type": "hotels interior design",
		// 	"url": "project/shimao-hongqiao-mini-hotel"
		// },
		// {
		// 	"image": "images/content/portfolio/project-double-tree-sanya-thumb.jpg",
		// 	"location": "Sanya, China",
		// 	"name": "Doubletree Sanya",
		// 	"type": "resorts buildingdesign",
		// 	"url": "project/doubletree-sanya"
		// },
		// {
		// 	"image": "images/content/portfolio/project-fairmont-sanur-beach-bali-thumb.jpg",
		// 	"location": "Bali, Indonesia",
		// 	"name": "Fairmont Sanur Beach Bali",
		// 	"type": "resorts interiordesign",
		// 	"url": "project/fairmont-sanur-beach-bali"
		// },
		// {
		// 	"image": "images/content/portfolio/project-hilton-goa-thumb.jpg",
		// 	"location": "Goa, India",
		// 	"name": "Hilton Goa",
		// 	"type": "resorts buildingdesign interiordesign",
		// 	"url": "project/hilton-goa"
		// },
		// {
		// 	"image": "images/content/portfolio/project-hyatt-regency-jeju-thumb.jpg",
		// 	"location": "Republic of Korea",
		// 	"name": "Hyatt Regency Jeju",
		// 	"type": "resorts interiordesign",
		// 	"url": "project/hyatt-regency-jeju"
		// },
		// {
		// 	"image": "images/content/portfolio/project-krabi-resort-thumb.jpg",
		// 	"location": "Krabi, Thailand",
		// 	"name": "Krabi Resort",
		// 	"type": "resorts masterplanning buildingdesign",
		// 	"url": "project/krabi-resort"
		// },
		// {
		// 	"image": "images/content/portfolio/project-miaonong-resort-thumb.jpg",
		// 	"location": "Ningbo, China",
		// 	"name": "Miaonong Resort",
		// 	"type": "resorts masterplanning buildingdesign interiordesign",
		// 	"url": "project/miaonong-resort"
		// },
		// {
		// 	"image": "images/content/portfolio/project-podo-thumb.jpg",
		// 	"location": "Jeju Island, South Korea",
		// 	"name": "Podo",
		// 	"type": "resorts interiordesign",
		// 	"url": "project/podo"
		// },
		// {
		// 	"image": "images/content/portfolio/project-princes-palace-resort-and-spa-thumb.jpg",
		// 	"location": "Istanbu, Turkey",
		// 	"name": "Princes' Palace Resort & Spa",
		// 	"type": "resorts interiordesign",
		// 	"url": "project/princes-palace-resort-spa"
		// },
		// {
		// 	"image": "images/content/portfolio/project-qianshen-spa-and-hotel-thumb.jpg",
		// 	"location": "Hefei, China",
		// 	"name": "Qianshen Spa & Hotel",
		// 	"type": "resorts masterplanning buildingdesign branddesign",
		// 	"url": "project/qianshen-spa-hotel"
		// },
		// {
		// 	"image": "images/content/portfolio/project-regent-jakarta-thumb.jpg",
		// 	"location": "Jakarta, Indonesia",
		// 	"name": "Regent Jakarta",
		// 	"type": "resorts buildingdesign interiordesign",
		// 	"url": "project/regent-jakarta"
		// },
		// {
		// 	"image": "images/content/portfolio/project-samui-resort-thumb.jpg",
		// 	"location": "Samui, Thailand",
		// 	"name": "Samui Resort",
		// 	"type": "resorts masterplanning",
		// 	"url": "project/samui-resort"
		// },	
		// {
		// 	"image": "images/content/portfolio/project-sarasvati-a-luxury-collection-resort-thumb.jpg",
		// 	"location": "Bali, Indonesia",
		// 	"name": "Sarasvati, A Luxury Collection Resort",
		// 	"type": "resorts",
		// 	"url": "project/sarasvati-a-luxury-collection-resort"
		// },	
		// {
		// 	"image": "images/content/portfolio/project-sheraton-mactan-thumb.jpg",
		// 	"location": "Mactan Island, Cebu, Philipines",
		// 	"name": "Sheraton Mactan",
		// 	"type": "resorts buildingdesign interiordesign",
		// 	"url": "project/sheraton-mactan"
		// },	
		// {
		// 	"image": "images/content/portfolio/project-wanda-reign-xsbn-thumb.jpg",
		// 	"location": "Xishuangbanna, China",
		// 	"name": "Wanda Reign XSBN",
		// 	"type": "resorts masterplanning buildingdesign",
		// 	"url": "project/wanda-reign-xsbn"
		// }
 	// ];

 	// search_json['news_pr'] = [
 	// 	{
		// 	"date": "Apr 2015",
		// 	"content": "BLINK Wins First Project in Middle East with MonsoonInspired Interiors for Alila Salalah in Oman",
		// 	"link": "http://blinkdg.com/images/pdf/buzz/blink%20first%20project%20in%20middle%20east%20april%2022%202015.pdf"
		// },
		// {
		// 	"date": "Mar 2015",
		// 	"content": "BLINK Design Group Appointed Interior Design Firm of Record for Six Senses Project in Uluwatu, Bali",
		// 	"link": "http://blinkdg.com/images/pdf/buzz/blink%20six%20senses%20release%2019%20march%202015.pdf"
		// },
		// {
		// 	"date": "Feb 2015",
		// 	"content": "Luxury Hospitality Design Firm BLINK to Relaunch Illustrious Regent Brand in Jakarta",
		// 	"link": "http://blinkdg.com/images/pdf/buzz/blink%20regent%20jakarta%20release%2016%20feb%202015.pdf"
		// },
		// {
		// 	"date": "Nov 2014",
		// 	"content": "Luxury Hospitality Design Roundtable Declares Specialisation and Segmentation as the New Watchwords",
		// 	"link": "http://blinkdg.com/images/pdf/buzz/blink-hicap%20hk%202014%20roundtable%20release%20en.pdf"
		// },
		// {
		// 	"date": "Oct 2014",
		// 	"content": "BLINK Reaches Finals of Prestigious Gold Key Awards with Striking Sanctuary Concept for Regent Bali",
		// 	"link": "http://blinkdg.com/images/pdf/buzz/blink-gold%20key%20award-release.pdf"
		// },
		// {
		// 	"date": "Jul 2014",
		// 	"content": "BLINK Design Group Marches into Greater China at Doubletime as New Shanghai Office Drives Growth and Boosts Client Relations",
		// 	"link": "http://blinkdg.com/images/pdf/buzz/blink-china%20july%202014%20edited%20oct%202014.pdf"
		// },
		// {
		// 	"date": "Jun 2014",
		// 	"content": "BLINK Strikes a Chord with Pietro Campanella",
		// 	"link": "http://blinkdg.com/images/pdf/buzz/blink-pietro%20campanella%20release.pdf"
		// },
		// {
		// 	"date": "Jun 2014",
		// 	"content": "BLINK Basks in Reflected Glory as Regent Bali Lights Up Conde Nast Traveller's 2014 'HOT LIST'",
		// 	"link": "http://blinkdg.com/images/pdf/buzz/blink-regent%20bali%20hot%20list%20release.pdf"
		// },
		// {
		// 	"date": "May 2014",
		// 	"content": "Christopher Chua Announced as BLINK's Managing Director, Returns Home to Singapore to Take Up Reins",
		// 	"link": "http://blinkdg.com/images/pdf/buzz/blink-christopher%20chua%20release.pdf"
		// },
		// {
		// 	"date": "May 2014",
		// 	"content": "BLINK's Key Role in Regent Rebirth Applauded as Flagship Phuket Resort Picks up Top Interior Design Award",
		// 	"link": "http://blinkdg.com/images/pdf/buzz/blink-regent%20release.pdf"
		// },
		// {
		// 	"date": "Apr 2014",
		// 	"content": "Embrace Authenticity, Creative Design and Practicality for Success: BLINK Hospitality Roundtable",
		// 	"link": "http://blinkdg.com/images/pdf/buzz/blink%20hospitality%20roundtable.pdf"
		// },
		// {
		// 	"date": "Jan 2014",
		// 	"content": "BLINK Wins Prestigious Asia Pacific Interior Design Award for Regent Phuket Cape Panwa",
		// 	"link": "http://blinkdg.com/images/pdf/buzz/blink%20wins%20prestigious%20asia%20pacific%20interior%20design%20award%20for%20regent%20phuket%20cape%20panwa%20in%20thailand.pdf"
		// },
		// {
		// 	"date": "Dec 2013",
		// 	"content": "BLINK Broadens Horizons of Design as it Spreads Innovation Across the Globe",
		// 	"link": "http://blinkdg.com/images/pdf/buzz/blink-4december2013.pdf"
		// },
		// {
		// 	"date": "Nov 2013",
		// 	"content": "'Time, Space and Timeless Design' are the New Luxuries for Business and Elite Travellers: Asia Luxury Hospitality Heavyweights' Roundtable",
		// 	"link": "http://blinkdg.com/images/pdf/buzz/blink-27november2013.pdf"
		// },
		// {
		// 	"date": "Aug 2013",
		// 	"content": "Leading Hospitality Design Firm BLINK Launches New Regional Headquarters in Stylish Sathorn",
		// 	"link": "http://blinkdg.com/images/pdf/buzz/blink-26august2013.pdf"
		// },
		// {
		// 	"date": "Jul 2013",
		// 	"content": "Regent Hotels Appoints BLINK to Create Flagship Hotels in Taiwan and China as Legendary Brands Expands Reach",
		// 	"link": "http://blinkdg.com/images/pdf/buzz/2013.07.24%20blink%20regent%20china.pdf"
		// },
		// {
		// 	"date": "Apr 2013",
		// 	"content": "BLINK Resorts in China and India for Marriott, Hilton Take Shape, Along with Firm's Reputation as Leading Hospitality Architects",
		// 	"link": "http://blinkdg.com/images/pdf/buzz/blink%20-%20hilton%20goa%20marriott%20xsb%2024april2013.pdf"
		// },
		// {
		// 	"date": "Jan 2013",
		// 	"content": "Blink Restores Lustre to Regent's Crown with Two Stunning New Resorts in Phuket and Bali",
		// 	"link": "http://blinkdg.com/images/pdf/buzz/blink%20-%20regent%20phuket%20bali%209january2013.pdf"
		// },
		// {
		// 	"date": "Nov 2012",
		// 	"content": "Blink Bags Hong Kong Gong, Begins New Beijing Legend and puts Hot Springs in First Steps in China",
		// 	"link": "http://blinkdg.com/images/pdf/buzz/blink%20-%2027november2012.pdf"
		// },
		// {
		// 	"date": "May 2012",
		// 	"content": "Blink Scoops 2012 HD Design Awards with Instant Classic for Conrad in China",
		// 	"link": "http://blinkdg.com/images/pdf/buzz/blink%20-%208may2012.pdf"
		// },
		// {
		// 	"date": "Feb 2012",
		// 	"content": "Asia's Hospitality Design Innovators Unveil Latest Leap in Luxury with Maldives Resort for Jumeirah",
		// 	"link": "http://blinkdg.com/images/pdf/buzz/blink%20-%2020january2012.pdf"
		// }
 	// ];

 	// search_json['news'] = [
	 // 	{
		// 	"type": "Media Coverage",
		// 	"date": "Dec 2015",
		// 	"title": "Bali Style",
		// 	"content": "BLINK Design - Interview with Clint Nagata",
		// 	"link": "Bali-Style-Holiday_BLINK_2015.pdf"
		// },
		// {
		// 	"type": "Media Coverage",
		// 	"date": "Sep 2015",
		// 	"title": "HOTEL NEWS RESOURCE",
		// 	"content": "Regent Place Xi'an to open 2016 in China",
		// 	"link": "http://www.hotelnewsresource.com/article85422.html"
		// },
		// {
		// 	"type": "Media Coverage",
		// 	"date": "Sep 2015",
		// 	"title": "TRAVEL DAILY MEDIA",
		// 	"content": "egent's new Xi'an hotel reaches milestone",
		// 	"link": "http://www.traveldailymedia.com/226399/regents-new-xian-hotel-reaches-milestone/"
		// },
		// {
		// 	"type": "Media Coverage",
		// 	"date": "July 2015",
		// 	"title": "FORBES INDONESIA",
		// 	"content": "Supreme Design ­Clint Nagata's BLINK Design Group will showcase its talents with the first Six Senses resort in Bali",
		// 	"link": "http://www.blinkdg.com/images/pdf/buzz/forbes%20asia%20jul%202015.pdf"
		// },
		// {
		// 	"type": "Media Coverage",
		// 	"date": "June 2015",
		// 	"title": "Hotelier Middle East",
		// 	"content": "esigning for the seasons",
		// 	"link": "http://www.blinkdg.com/images/pdf/buzz/hotelier%20me%20june%202015_blink.pdf"
		// },
		// {
		// 	"type": "Media Coverage",
		// 	"date": "Apr 2015",
		// 	"title": "DESTINATIONS OF THE WORLD NEWS",
		// 	"content": "Interview: Hotel Designer and Creative Director Clint Nagata",
		// 	"link": "http://www.dotwnews.com/focus/interview-hotel-designer-and-creative-director-clint-nagata#close_subscription"
		// },
		// {
		// 	"type": "Media Coverage",
		// 	"date": "Apr 2015",
		// 	"title": "Travel Daily News",
		// 	"content": "BLINK Wins First Project in Middle East with Monsoon­ inspired Interiors for Alila Salalah in Oman",
		// 	"link": "http://www.traveldailynews.com/news/article/65761/blink-wins-first-project-in"
		// },
		// {
		// 	"type": "Media Coverage",
		// 	"date": "Mar 2015",
		// 	"title": "HOTELIER INDONESIA",
		// 	"content": "BLINK Design Group Appointed for Six Senses Project in Uluwatu, Bali",
		// 	"link": "http://hotelier-indonesia.com/news/blink-design-group-appointed-for-six-senses-project-in-uluwatu-bali/"
		// },
		// {
		// 	"type": "Media Coverage",
		// 	"date": "Feb 2015",
		// 	"title": "4 HOTELIER",
		// 	"content": "BLINK to Design the new Regent Jakarta.",
		// 	"link": "http://www.4hoteliers.com/news/story/13863"
		// },
		// {
		// 	"type": "Media Coverage",
		// 	"date": "Jan - Feb 2015",
		// 	"title": "Asia Dreams",
		// 	"content": "Welcome to Bali, Fairmont!",
		// 	"link": "http://asiadreams.com/edisi/january-february-2015/news/welcome-to-bali-fairmont.html"
		// },
 	// 	{
 	// 		"type": "Media Coverage",
		// 	"date": "Nov 2014",
		// 	"title": "TTR Weekly",
		// 	"content": "Blinking Big Ideas",
		// 	"link": "http://www.ttrweekly.com/site/2014/11/blinking-big-ideas/"
		// },
		// {
		// 	"type": "Media Coverage",
		// 	"date": "Nov 2014",
		// 	"title": "Hotelier Indonesia",
		// 	"content": "Luxury Hospitality Design Roundtable Declares Specialisation and Segmentation as the New Watchwords",
		// 	"link": "http://hotelier-indonesia.com/news/luxury-hospitality-design-roundtable-declares-specialisation-and-segmentation-as-the-new-watchwords/"
		// },
		// {
		// 	"type": "Media Coverage",
		// 	"date": "Sep 2014",
		// 	"title": "Hotel Executive",
		// 	"content": "The Agony and Ecstasy of Creating Unique Hotels",
		// 	"link": "http://hotelexecutive.com/business_review/4080/the-agony-and-ecstasy-of-creating-unique-hotels"
		// },
		// {
		// 	"type": "Media Coverage",
		// 	"date": "Sep 2014",
		// 	"title": "Global Hotel Network",
		// 	"content": "Clint Nagata: Why Authenticity Matters",
		// 	"link": "http://www.globalhotelnetwork.com/resources/columns/perspectives/ClintNagata_b.pdf"
		// },
		// {
		// 	"type": "Media Coverage",
		// 	"date": "Aug 2014",
		// 	"title": "THE PEAK HONG KONG",
		// 	"content": "The High Life: \"The Pad on the Peak\"",
		// 	"link": "http://www.blinkdg.com/images/pdf/buzz/blink%20the%20peak%20feature_design%20challenge_op.pdf"
		// },
		// {
		// 	"type": "Media Coverage",
		// 	"date": "Aug 2014",
		// 	"title": "Singapore Tatler",
		// 	"content": "The Dapper Man: Christopher Chua",
		// 	"link": "http://sg.asiatatler.com/style/fashion/the-dapper-man-christopher-chua"
		// },
		// {
		// 	"type": "Media Coverage",
		// 	"date": "Aug 2014",
		// 	"title": "ETB News",
		// 	"content": "BLINK Design Group Marches into Greater China at Double Time",
		// 	"link": "http://asia.etbnews.com/219402/blink-design-group-marches-greater-china-double-time/"
		// },
		// {
		// 	"type": "Media Coverage",
		// 	"date": "July 2014",
		// 	"title": "Casaviva",
		// 	"content": "Clint Nagata",
		// 	"link": "http://www.blinkdg.com/images/pdf/buzz/cassaviva%20clint%20nagata.pdf"
		// },
		// {
		// 	"type": "Media Coverage",
		// 	"date": "May 2014",
		// 	"title": "Conde Nast Traveller",
		// 	"content": "The Hot List 2014 Indonesia, Regent Bali",
		// 	"link": "http://www.cntraveller.com/awards/the-hot-list/hot-list-2014/regent-bali-indonesia"
		// },
		// {
		// 	"type": "Media Coverage",
		// 	"date": "May 2014",
		// 	"title": "Asian Hotel & Catering Times",
		// 	"content": "Christopher Chua becomes MD BLINK Design Group",
		// 	"link": "http://www.asianhotelandcateringtimes.com/christopher-chua-becomes-md-blink-design-group/"
		// },
		// {
		// 	"type": "Media Coverage",
		// 	"date": "May 2014",
		// 	"title": "Hotelier Indonesia",
		// 	"content": "BLINK's Key Role in Regent's Rebirth Picks up Design Award",
		// 	"link": "http://hotelier-indonesia.com/news/blinks-key-role-in-regent-rebirth-applauded-as-flagship-phuket-resort-picks-up-design-award/"
		// },
		// {
		// 	"type": "Media Coverage",
		// 	"date": "May 2014",
		// 	"title": "South China Morning Post",
		// 	"content": "Subtle Sophistication the Way Forward for Luxury Travellers in China",
		// 	"link": "http://www.scmp.com/magazines/style/article/1500681/room-grow"
		// },
		// {
		// 	"type": "Media Coverage",
		// 	"date": "May 2014",
		// 	"title": "Asian Hotel & Catering Times",
		// 	"content": "Embrace Authenticity, creative design and practicality for success, roundtable hears",
		// 	"link": "http://www.asianhotelandcateringtimes.com/embrace-authenticity-creative-design-practicality-success-roundtable-hears/"
		// },
		// {
		// 	"type": "Media Coverage",
		// 	"date": "Apr 2014",
		// 	"title": "The Milliardaire",
		// 	"content": "Jumeirah Dhevanafushi, A Stunning Sanctuary",
		// 	"link": "http://www.themilliardaire.co/hotspot/jumeirah-dhevanafushi-maldives-10187/"
		// },
		// {
		// 	"type": "Media Coverage",
		// 	"date": "Feb 2014",
		// 	"title": "FORM",
		// 	"content": "GutFeel Architecture",
		// 	"link": "http://www.blinkdg.com/images/pdf/buzz/form%20and%20room%20feb%202014%20chris%20chua.pdf"
		// },
		// {
		// 	"type": "Media Coverage",
		// 	"date": "Jan 2014",
		// 	"title": "Perspective",
		// 	"content": "A Sense of Place",
		// 	"link": "http://www.blinkdg.com/images/pdf/buzz/perspective%20regent%20phuket%20jan14%20destination-1.pdf"
		// },
		// {
		// 	"date": "2013 - 2014",
		// 	"title": "Expat Society",
		// 	"content": "The 300 List",
		// 	"link": "http://www.blinkdg.com/images/pdf/buzz/expat%20society_2013-2014_dec13_2014.01.09.pdf"
		// },
		// {
		// 	"date": "Nov 2013",
		// 	"title": "Interior Design",
		// 	"content": "10 Questions with... BLINK Design Group",
		// 	"link": "http://www.pattayamail.com/property/hospitality-design-firm-blink-sets-up-new-hq-in-stylish-sathorn-29850"
		// },
		// {
		// 	"date": "Sep 2013",
		// 	"title": "Pattaya Mail",
		// 	"content": "Hospitality design firm BLINK sets up new HQ in stylish Sathorn",
		// 	"link": "http://www.interiordesign.net/articles/detail/35803-10-questions-with-blink-design-group/"
		// },
		// {
		// 	"date": "Jul 2013",
		// 	"title": "Singapore Tatler",
		// 	"content": "Purist Pursuits",
		// 	"link": "http://www.blinkdg.com/images/pdf/buzz/stjul13-christopher%20chua.pdf"
		// },
		// {
		// 	"date": "Jul 2013",
		// 	"title": "Think Design",
		// 	"content": "BLINK",
		// 	"link": "http://www.blinkdg.com/images/pdf/buzz/think%20design%20july%202013.pdf"
		// },
		// {
		// 	"date": "Jun 2013",
		// 	"title": "The Edge",
		// 	"content": "Here to Stay",
		// 	"link": "http://www.blinkdg.com/images/pdf/buzz/june%202013%20the%20edge%20chris%20chua.pdf"
		// },
		// {
		// 	"date": "Mar 2013",
		// 	"title": "Perspective",
		// 	"content": "In the BLINK of an Eye",
		// 	"link": "http://www.blinkdg.com/images/pdf/buzz/blink%20perspective%20march%202013%20clint%20nagata%20profile%20low%202.pdf"
		// },
		// {
		// 	"date": "Apr 2013",
		// 	"title": "The Nation",
		// 	"content": "BLINK Puts its Marker on the Sand at Two Beach Resorts",
		// 	"link": "http://www.blinkdg.com/images/pdf/buzz/blink_the%20nation%2026%20april%202013.pdf"
		// },
		// {
		// 	"date": "Mar 2013",
		// 	"title": "People's Daily Online",
		// 	"content": "China, an exciting canvas for hospitality design",
		// 	"link": "http://english.peopledaily.com.cn/205040/8172131.html"
		// },
		// {
		// 	"date": "Mar 2013",
		// 	"title": "China Daily",
		// 	"content": "Gimme Shelter",
		// 	"link": "http://www.blinkdg.com/images/pdf/buzz/china%20daily%20march%2017%202013s.pdf"
		// },
		// {
		// 	"date": "Jan 2013",
		// 	"title": "The Nation",
		// 	"content": "Blink brings more lustre and luxury to Bali and Phuket",
		// 	"link": "http://www.blinkdg.com/images/pdf/buzz/thenation-11jan2013.pdf"
		// },
		// {
		// 	"date": "Jan 2013",
		// 	"title": "Cocotraie",
		// 	"content": "The Rising Star in Hospitality Design",
		// 	"link": "http://www.blinkdg.com/images/pdf/buzz/cocotraie_jumeirah_dhevanafushi_resort-2.2.pdf"
		// },
		// {
		// 	"date": "December 2012",
		// 	"title": "4Hoteliers",
		// 	"content": "BLINK design moves into China",
		// 	"link": "http://www.4hoteliers.com/4hots_nshw.php?mwi=10730"
		// },
		// {
		// 	"date": "December 2012",
		// 	"title": "Spa Opportunities",
		// 	"content": "Blink Design Group wins three key design projects",
		// 	"link": "http://www.blinkdg.com/images/pdf/buzz/spaopportunities%205%20dec.pdf"
		// },
		// {
		// 	"date": "August 2012",
		// 	"title": "TTG Asia",
		// 	"content": "How to be Relevant",
		// 	"link": "http://www.blinkdg.com/images/pdf/buzz/ttg%20asia%20october%202012.pdf"
		// },
		// {
		// 	"date": "July 2012",
		// 	"title": "Perspective",
		// 	"content": "My Blue Heaven",
		// 	"link": "http://www.blinkdg.com/images/pdf/buzz/perspective%20july%202012.pdf"
		// },
		// {
		// 	"date": "June 2012",
		// 	"title": "The Centurion",
		// 	"content": "Blinking Ahead",
		// 	"link": "http://www.blinkdg.com/images/pdf/buzz/centurion%20online%20june%202012.pdf"
		// },
		// {
		// 	"date": "May 2012",
		// 	"title": "Conde Nast Traveller",
		// 	"content": "The Hot List 2012",
		// 	"link": "http://www.blinkdg.com/images/pdf/buzz/conde%20nast%20traveller%20may%202012.pdf"
		// },
		// {
		// 	"date": "May 2012",
		// 	"title": "Sleeper China",
		// 	"content": "Design Perspectives",
		// 	"link": "http://www.blinkdg.com/images/pdf/buzz/sleeper%20china%20may%202012.pdf"
		// },
		// {
		// 	"date": "May 2012",
		// 	"title": "4 Hoteliers",
		// 	"content": "BLINK scoops 2012 HD design award with Conrad Sanya, China",
		// 	"link": "http://www.blinkdg.com/images/pdf/buzz/4%20hoteliers%20may%202012.pdf"
		// },
		// {
		// 	"date": "May 2012",
		// 	"title": "Indepth",
		// 	"content": "Phuket Design",
		// 	"link": "http://www.blinkdg.com/images/pdf/buzz/indepth%20phuket%20design%20may%202012.pdf"
		// },
		// {
		// 	"date": "May 2012",
		// 	"title": "Phuketwan",
		// 	"content": "Phuket ResortWATCH: Butlers on Tap",
		// 	"link": "http://www.blinkdg.com/images/pdf/buzz/phuketwan%20may%202012.pdf"
		// },
		// {
		// 	"date": "Feb 2012",
		// 	"title": "Queensland Times",
		// 	"content": "New 'Unique Island' Hotel",
		// 	"link": "http://www.blinkdg.com/images/pdf/buzz/queensland%20times%20feb%202012.pdf"
		// },
		// {
		// 	"date": "Jan 2012",
		// 	"title": "TTG Mice",
		// 	"content": "Venue Check",
		// 	"link": "http://www.blinkdg.com/pdf/buzz/Blink_TTG_Mice_Jan2012.pdf"
		// }
 	// ];

 	function escapeRegExp(string){
	  return string.replace(/([.*+?^=!:${}()|\[\]\/\\])/g, "\\$1");
	}

    var raw_query = location.search.split('q=')[1] ? location.search.split('q=')[1] : '';
    var query = decodeURIComponent(raw_query).replace(/\+/g, ' ');;

    $('.query').html(query);

    var regex = '\\b';
	regex += escapeRegExp(query);
	regex += '\\b';

	var search_result = [];
		search_result['portfolio'] = [];
		search_result['news'] = [];
		search_result['news_pr'] = [];
		search_result['profile'] = [];
		search_result['insights'] = [];
		search_result['careers'] = [];
		search_result['contacts'] = [];

	if(query) {

		$.getJSON(homeUrl+'/search_json', function(data) {	
			search_json['portfolio'] = data['portfolio'];
			search_json['news'] = data['news'];
			search_json['news_pr'] = data['news_pr'];

			$.each(search_json['portfolio'], function(i, v) {
		    	if (new RegExp(regex, "i").test(v.name) == true) {
		    		search_result['portfolio'].push(search_json['portfolio'][i]);
		    	}else if (new RegExp(regex, "i").test(v.type) == true) {
		    		search_result['portfolio'].push(search_json['portfolio'][i]);
		    	}else if (new RegExp(regex, "i").test(v.location) == true) {
		    		search_result['portfolio'].push(search_json['portfolio'][i]);
		    	}    	
		    });

		    $.each(search_json['news'], function(i, v) {
		    	if (new RegExp(regex, "i").test(v.title) == true) {	    		
		    		search_result['news'].push(search_json['news'][i]);
		    	}else if (new RegExp(regex, "i").test(v.content) == true) {
		    		search_result['news'].push(search_json['news'][i]);
		    	}    	
		    });

		     $.each(search_json['news_pr'], function(i, v) {
		    	if (new RegExp(regex, "i").test(v.title) == true) {	    		
		    		search_result['news_pr'].push(search_json['news_pr'][i]);
		    	}else if (new RegExp(regex, "i").test(v.content) == true) {
		    		search_result['news_pr'].push(search_json['news_pr'][i]);
		    	}    	
		    });

	     	$.each(search_json['profile'], function(i, v) {
		    	if (new RegExp(regex, "i").test(v.title) == true) {	    		
		    		search_result['profile'].push(search_json['profile'][i]);
		    	}else if (new RegExp(regex, "i").test(v.description) == true) {
		    		search_result['profile'].push(search_json['profile'][i]);
		    	}    	
		    });

		    $.each(search_json['insights'], function(i, v) {
		    	if (new RegExp(regex, "i").test(v.title) == true) {	    		
		    		search_result['insights'].push(search_json['insights'][i]);
		    	}else if (new RegExp(regex, "i").test(v.description) == true) {
		    		search_result['insights'].push(search_json['insights'][i]);
		    	}    	
		    });

		    $.each(search_json['careers'], function(i, v) {
		    	if (new RegExp(regex, "i").test(v.title) == true) {	    		
		    		search_result['careers'].push(search_json['careers'][i]);
		    	}else if (new RegExp(regex, "i").test(v.description) == true) {
		    		search_result['careers'].push(search_json['careers'][i]);
		    	}    	
		    });

		    $.each(search_json['contacts'], function(i, v) {
		    	if (new RegExp(regex, "i").test(v.title) == true) {	    		
		    		search_result['contacts'].push(search_json['contacts'][i]);
		    	}else if (new RegExp(regex, "i").test(v.description) == true) {
		    		search_result['contacts'].push(search_json['contacts'][i]);
		    	}    	
		    });

		    //////
			//////

			var counter = 0;
		    counter = search_result['portfolio'].length + search_result['news'].length + search_result['profile'].length + search_result['insights'].length + search_result['careers'].length + search_result['contacts'].length;

		    $('.result-count').html(counter);

		    if(search_result['portfolio'].length>0)
				addToTemplate('portfolio');
			if(search_result['news'].length>0)
				addToTemplate('news');	
			if(search_result['profile'].length>0)
				addToTemplate('profile');
			if(search_result['careers'].length>0)
				addToTemplate('careers');	
			if(search_result['insights'].length>0)
				addToTemplate('insights');	
			if(search_result['contacts'].length>0)
				addToTemplate('contacts');	
			if(search_result['news_pr'].length>0)
				addToTemplate('news_pr');	

			var term = query;
			var item = $("p,h2,h3");
			var reg  = new RegExp(term, "i");

			item.html(function (i, html) {
			    return html.replace(reg, function (match) {
			        return '<span class="highlight">' + match + '</span>'
			    });
			});


		});

		
	} 

	// console.log(search_result)   

	


    //////
    //////

    function createTemplate(category) {
    	var source = $("#"+category+"-template").html(),
			template = Handlebars.compile(source);

		return template;
    }


    function addToList(html, category) {
		clean_html = html.replace(/\n/g, "").replace(/[\t ]+\</g, "<").replace(/\>[\t ]+\</g, "><").replace(/\>[\t ]+$/g, ">");

		$('#all-content').append(clean_html);
	}

	function addToNewsList(html) {
		clean_html = html.replace(/\n/g, "").replace(/[\t ]+\</g, "<").replace(/\>[\t ]+\</g, "><").replace(/\>[\t ]+$/g, ">");

		$('.content-5').append(clean_html);
	}

	function addToTemplate(category){
		var newdata = {};

		newdata['items'] = search_result[category];

		var template = createTemplate(category)

		var html = template(newdata);
		
		if(category=='news_pr')
			addToNewsList(html);
		else {
			if(html)
				addToList(html);
		}
		   	
	}	

});