<?php
return array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'rules'=>array(
			//china tours;
			'/travel/china-tours/'	=> 'bestChinaTours/chinaTours',
			'/travel/best-china-tours/'	=> 'bestChinaTours/index',
			'/travel/family-tours/'	=> 'bestChinaTours/familyTours',
			'/travel/yangtze-river-tours/'	=> 'bestChinaTours/yangtzeriverTours',
			'/travel/silk-road-tours/'	=> 'bestChinaTours/silkroadAdventure',
			'/travel/china-train-travel/'	=> 'bestChinaTours/chinaTrainTravel',
			'/travel/china-student-tours/'	=> 'bestChinaTours/chinaStudentTours',
			'/travel/china-senior-tours/'	=> 'bestChinaTours/chinaSeniorTours',
			// tours detail page;
			'travel/china-<name:.*>-<id:\d+>.html'  =>'toursDetail/index',
			//order
			 'travel/order/'  =>'order/index',
			 'travel/success/'  =>'order/success',
			 'travel/china-diy-tours/'  =>'order/new_order',
			 //reviews
			 'travel/pid/<packageid:\d+>/review/<tid:\d+>.html'  =>'reviews/index',
			// adoption
			  '/travel/adoption/OrphanageTravelGuide/<id:\d+>'  =>'adoption/index',
			  'travel/showMaps/<city_name:.*>/<id:\d+>'  =>'adoption/showMaps',
			  '<city_name:.*>/<city_id:\d+>/map.html'  =>'adoption/cityMaps',
			  '/travel/adoption/storyIndex/'  =>'adoption/adoptionArticle',
			  '/travel/adoption-orphanage/<title:.*>-<ar_id:\d+>'  =>'adoption/adoptionArticleDetail',
			  '/travel/adoption/homelandprovince/<province_id:\d+>'  =>'adoption/adoptionArticleByProvince',
			  '/travel/adoption/adoption-customize/'  =>'adoption/adoptionDiy',
			  '/travle/adoptionarticle/search'  =>'adoption/adoptionSearch',
			  '/travel/adoption/'  =>'adoption/adoptionHome',// 收养团首页面;
			  '/travel/adoption/saveorder/'=>'adoption/saveOrder',
			  '/travel/adoption/special-activities.html'=>'adoption/familyActivity',
			  '/travel/adoption/travelGuide/<id:\d+>'=>'adoption/orphanageTravelGuide',
			   '/travel/adoption/orphanageList'=>'adoption/adoptionList',
			  '/travel/adoption/noSearchResults/'=>'adoption/noSearchResults',
			  '/travel/adoption/beijingXianChengduItinerary/'=>'adoption/adoptionGroupTour',
			   '/travel/adoption/resource/'=>'adoption/resources',
			  '/travel/adoption-resource/<title:.*>-<resource_id:\d+>'  =>'adoption/adoptionResourcesDetail',
			  //destinations;
			  '/travel/city-tours/'=>'destions/index',
			  '/travel/city-<city_name:.*>-tours/'=>'destions/cityToursCommon',
			  '/travel/<city_name:.*>-tours/'=>'destions/sideTrips',
			// port
			  '/travel/cruise-port/'=>'port/index',
			  '/travel/cruise-port/<city_name:.*>-excursion-<id:\d+>' => 'port/PortExcursion',
			  '/travel/cruise-port/<name:.*>-port-introduction-<id:\d+>' => 'port/portIntroduction',
			  '/travel/international-cruise/<name:.*>-<id:\d+>' => 'port/CruiseView',
			// things
			'/travel/things/<artile:.*>-<at_id:\d+>.html'	=>'content/index',
			'/travel/things/'	=>'content/things',
			// payment;
			'paymentguide.htm'	=>'payment/payment',
			// static page
			'newsletter/'	=>'static/newsletter',
			'unsubscribeEmail/'	=>'static/unsubscribeEmail',
			'about-us/'	=>'static/aboutUs',
			'/travel/terms-and-conditions.html'	=>'static/temsAndConditions',
			'privacy-policy.html'	=>'static/privacyPolicy',
			'Emergency-Response.html'	=>'static/emergencyResponse',
			// original;
			'<controller:\w+>/<id:\d+>'=>'<controller>/view',
			'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
			'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
	);