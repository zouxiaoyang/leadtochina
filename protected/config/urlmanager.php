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
			'travel/family-tours' =>'familyTours/index',
			// tours detail page;
			'travel/<name:.*>-<id:\d+>.html'  =>'toursDetail/index',
			//order
			 'travel/order'  =>'order/index',
			//order
			 'travel/success'  =>'order/success',
			 //reviews
			 'travel/review/<tid:\d+>/<packageid:\d+>.html'  =>'reviews/index',
			// adoption
			  'travel/adoption/<id:\d+>'  =>'adoption/index',
			  'travel/showMaps/<city_name:.*>/<id:\d+>'  =>'adoption/showMaps',
			  '<city_name:.*>/<city_id:\d+>/map.html'  =>'adoption/cityMaps',
			  '/travel/adoptionarticle'  =>'adoption/adoptionArticle',
			  '/travel/adoptionarticle/detail/<ar_id:\d+>.html'  =>'adoption/adoptionArticleDetail',
			  '/travel/adoptionbyprovince/<province_id:\d+>'  =>'adoption/adoptionArticleByProvince',
			  '/travel/adoption/diy'  =>'adoption/adoptionDiy',
			  '/travle/adoptionarticle/search'  =>'adoption/adoptionSearch',
			  '/travel/adoptionhome/'  =>'adoption/adoptionHome',
			  '/travel/adoption/saveorder'=>'adoption/saveOrder',
			  '/travel/adoption/activity'=>'adoption/familyActivity',
			  '/travel/adoption/travelGuide/<id:\d+>'=>'adoption/orphanageTravelGuide',
			   '/travel/adoption/list'=>'adoption/adoptionList',
			  '/travel/adoption/noSearchResults'=>'adoption/noSearchResults',
			  '/travel/adoption/2016-group-tour'=>'adoption/adoptionGroupTour',


			'<controller:\w+>/<id:\d+>'=>'<controller>/view',
			'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
			'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		);
