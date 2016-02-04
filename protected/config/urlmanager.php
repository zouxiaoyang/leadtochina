<?php
return array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'rules'=>array(
			// 'travel/aa'	=>'site/aa',
			// china tours
			'travel/china-tours/'	=> 'bestChinaTours/chinaTours',
			//top10;
			'travel/best-china-tours/'	=> 'bestChinaTours/index',
			//family tours;
			'travel/family-tours/' =>'familyTours/index',

			
			// tours detail page;
			'travel/<name:.*>-<id:\d+>.html'  =>'toursDetail/index',
			//order
			 'travel/order/'  =>'order/index',
			 'travel/success/'  =>'order/success',
			 'order/china-diy-tours/'  =>'order/new_order',
			 
			 //reviews
			 'travel/review/<tid:\d+>/<packageid:\d+>.html'  =>'reviews/index',
			// adoption
			  'travel/adoption/<id:\d+>'  =>'adoption/index',
			  'travel/showMaps/<city_name:.*>/<id:\d+>'  =>'adoption/showMaps',
			  '<city_name:.*>/<city_id:\d+>/map.html'  =>'adoption/cityMaps',
			  '/travel/adoption/storyIndex/'  =>'adoption/adoptionArticle',
			  '/travel/adoption-orphanage/<title:.*>-<ar_id:\d+>'  =>'adoption/adoptionArticleDetail',
			  '/travel/adoptionbyprovince/<province_id:\d+>'  =>'adoption/adoptionArticleByProvince',
			  '/travel/adoption/adoption-customize/'  =>'adoption/adoptionDiy',
			  '/travle/adoptionarticle/search'  =>'adoption/adoptionSearch',
			  '/travel/adoption/'  =>'adoption/adoptionHome',// 收养团首页面;
			  '/travel/adoption/saveorder/'=>'adoption/saveOrder',
			  '/travel/adoption/special-activities.html'=>'adoption/familyActivity',
			  '/travel/adoption/travelGuide/<id:\d+>'=>'adoption/orphanageTravelGuide',
			   '/travel/adoption/orphanageList'=>'adoption/adoptionList',
			  '/travel/adoption/noSearchResults/'=>'adoption/noSearchResults',
			  '/travel/adoption/2016-group-tour/'=>'adoption/adoptionGroupTour',
			  //destinations;
			  '/travel/city-tours/'=>'destions/index',
			  '/travel/city-<city_name:.*>-tours/'=>'destions/cityToursCommon',
			  '/travel/<city_name:.*>-tours/'=>'destions/sideTrips',
			// port
			  '/travel/port/'=>'port/index',
			  '/travel/cruise-port/<city_name:.*>-excursion-<id:\d+>' => 'port/PortExcursion',
			  '/travel/cruise-port/<name:.*>-port-introduction-<id:\d+>' => 'port/portIntroduction',
			  '/travel/international-cruise/<name:.*>-<id:\d+>' => 'port/CruiseView',
			// things
			'/travel/things/'	=>'content/index',

			// original;
			'<controller:\w+>/<id:\d+>'=>'<controller>/view',
			'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
			'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		);