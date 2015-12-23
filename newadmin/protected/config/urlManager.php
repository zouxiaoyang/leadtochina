<?php
return array(
      'showScriptName'=>false,
      'urlFormat'=>'path',
      'rules'=>array(

      'faq/<id:\d+>/<title:.*?>'=>'faq/list',
          
      //adoption
      'adoption-customize' => 'adoption/customizeAdoption',
      'adoption-guide/<title:.*>-<id:\d+>' => 'adoption/adoptionList', 
      'adoption-orphanage/<title:.*>-<id:\d+>' => 'adoption/orphanageArticle',
      'adoption/<title:.*>-<id:\d+>' => 'adoption/specAdoption',
	  'adoption/china-orphange-trips' => 'adoption/chinaorphangetrips',
          
      //yangtze
      'yangtzecruise'=>'cruise/index',
      'yangtzecruise/ships'=>'cruise/ships',
      'yangtzecruise/ships/category-list'=>'cruise/categoryList',
      'yangtzecruise/calendar'=>'cruise/calendar',
      'yangtzecruise/inquiry'=>'cruise/inquiry',
      'yangtzecruise/yangtzetour-from-chongqing.html'=>'cruise/yangtzetourFromChongqing',
      'yangtzecruise/yangtzetour-from-shanghai.html'=>'cruise/yangtzetourFromShanghai',
      'yangtzecruise/china-river-cruises.html'=>'cruise/chinaRiverCruise',
      'yangtzecruise/<id:\d+>/<name:.*?>'=>'cruise/view',

      'yangtzecruise/<name:.*>-<id:\d+>-onboard.html' => 'cruise/cruiseOnboard',
      'yangtzecruise/<name:.*>-<id:\d+>-itinerary.html' => 'cruise/cruiseItinerary',
      'yangtzecruise/<name:.*>-<id:\d+>-images.html' => 'cruise/cruiseImages',
      'yangtzecruise/<name:.*>-<id:\d+>-date.html' => 'cruise/cruiseDate',
      'yangtzecruise/<name:.*>-<id:\d+>-price.html' => 'cruise/cruisePrice',
      'yangtzecruise/<name:.*>-<id:\d+>-tips.html' => 'cruise/cruiseTips',
      'yangtzecruise/<name:.*>-<id:\d+>.html' => 'cruise/cruiseOverview',
      'yangtzecruise/cruise-order-<cruiseid:\d+>' => 'cruise/cruiseOrder',
      

       //cruiseProt
      'cruise-port/tianjin-cruise-port-to-beijing'=>'cruisePorts/tianjinCruisePort',
      'cruise-port/tianjin-cruise-port-and-beijing-coach-transfer'=>'promotion/saveTianCruisePort',
      'cruise-port/shanghai-cruise-port' => 'CruisePorts/shanghaiCruisePort', 
      'cruise-port/<cityname:.*?>-port-<id:\d+>'=>'CruisePorts/PortView',
      'shanghai-port-excursions-celebrity-cruise'=>'CruisePorts/Shanghaicelebritycruise',
      'cruise-port/tianjin-port-beijing-shutlle-bus'=>'CruisePorts/TianjinPortBeijingBus',
      //'cruise-port'=>'CruisePorts/index',
      'cruise-port' => 'cruisePorts/index2',
      'international-cruise/<name:.*>-<id:\d+>' => 'cruisePorts/CruiseView',
      'cruise-port/<name:.*>-port-introduction-<id:\d+>' => 'cruisePorts/portIntroduction',
      'cruise-port/<name:.*>-port-excursion-<id:\d+>' => 'cruisePorts/portExcursion',
      'cruise-port/<name:.*>-port-faq-<id:\d+>' => 'cruisePorts/cruiseFaq',
      'cruise-port/<name:.*>-port-excursion-<id:\d+>-test1' => 'cruisePorts/portExcursiontest1',
      //muslim
      'muslim'=>'muslimTour/index',
      'city-muslim-tour'=>'muslimTour/muslimCityTourIndex',
      'city-muslim-tour/<title:.*?>-<cityid:\d+>'=>'muslimTour/muslimCityTour',
      'china-muslim-tour-package' => 'muslimTour/muslimChinaTour',
      'mosques-in-china' => 'muslimGuide/muslimMosquesIndex',
      'mosques-in-china/<title:.*>-<cityid:\d+>' => 'muslimGuide/muslimMosquesList',
      'muslim-mosques-guide/<title:.*>-<id:\d+>' => 'muslimGuide/muslimMosquesView',
      'muslim-halal-food-guide/<title:.*>-<id:\d+>' => 'muslimGuide/muslimHalalFoodView',
      'muslim-shopping-guide/<title:.*>-<id:\d+>' => 'muslimGuide/muslimShoppingView',
      'china-muslim-in-history' => 'muslimGuide/muslimHistoryList',
      'china-muslim-in-history/<name:.*?>-<id:\d+>'=>'muslimGuide/muslimHistoryView',      
      'halal-food-in-china' => 'muslimGuide/muslimHalalFoodList',
      'halal-food-in-china/<title:.*?>-<cityid:\d+>' => 'muslimGuide/muslimHalalRestaurantList',
      'prayer-time' => 'muslimGuide/muslimPrayerList',
      'prayer-time/<title:.*?>' => 'muslimGuide/muslimPrayerTimeView',
      'shopping-malls-in-China' => 'muslimGuide/muslimShoppingIndex',
      'shopping-malls-in-China/<title:.*?>-<cityid:\d+>' => 'muslimGuide/muslimShoppingList',

      //rental
      'rental/car-rental'=>'Rental/carRental',
      'rental/guide-rental'=>'Rental/guideRental',

      //chinaTours
      'china-tours' => 'chinaTours/index',
      'best-china-tours'=>'chinaTours/top10Tours',
      'classic-china-tours'=>'chinaTours/classicTours',
      'cheap-china-tours' => 'chinaTours/cheapChinaTours',
      'yangtze-river-tours' => 'chinaTours/yangtzeRiverTours',
      'china-tibet-tours' => 'chinaTours/chinaTibetTours', 
      'china-family-tours' => 'chinaTours/familyTours',
      'china-train-travel' => 'chinaTours/trainTravel',
      'china-student-tours' => 'chinaTours/studentTours',
      'china-student-tours-test1' => 'chinaTours/studentTours_test1',
      'china-student-tours-successfulcases' => 'chinaTours/successfulCases',
      'china-student-tours-culturalexchange' => 'chinaTours/culturalExchange',
      'china-student-tours-cooperation' => 'chinaTours/cooperation',
      'china-student-tours-whyus' => 'chinaTours/WhyUs',
      'china-senior-tours' => 'chinaTours/ChinaSeniorTours',
	  'china-senior-tours-traveltips' => 'chinaTours/ChinaSeniorToursTravelTips',
      'china-senior-tours-whyus' => 'chinaTours/ChinaSeniorToursWhyUs',
      'china-jewish-tours' => 'chinaTours/JewishTours',
      'china-jewish-centers-in-china' => 'chinaTours/JewishCentersinChina',
      'china-jewish-tours-whyus' => 'chinaTours/JewishToursWhyUs',
      'china-tibet-tours' => 'chinaTours/tibetTours',
      '72-hour-visa-free-tours' => 'chinaTours/72HourVisaFreeTours',
      'quick_customize_tours' => 'chinaTours/quickCustomizeTours',
      'china-tours-from-australia' => 'chinaTours/australiaTours',
      'china-tours-from-south-africa' => 'chinaTours/southAfrica',
      'china-winter-tours' => 'chinaTours/winterTours',
      'china-winter-tours/<title:.*?>' => 'chinaTours/winterToursGuide',
      'fujian-tulou-tours' => 'chinaTours/fujianTulouTours',

      'advance-search' => 'chinaTours/advanceSearch',
      'china-search' => 'chinaTours/searchList',
      'cooperation-partner' => 'chinaTours/partners',
      'air' => 'chinaTours/air',

      //promotion
      'early-bird-discounts' => 'promotion/earlyBirdDiscounts',
      'pay-via-paypal' => 'promotion/payViaPaypal',
      'regular-customer' => 'promotion/regularCustomers',
      'be-face-book-fan' => 'promotion/beFaceBookFan',
      'monthly-special-offer' => 'promotion/monthlySpecialOffer',
      'theme-activities' => 'promotion/themeActivities',


	//chinaGuide
      'china-guide' => 'chinaGuide/index',
      'city-guide' => 'chinaGuide/cityGuide',
      'china-guide/<cityname:.*?>-city-guide'=>'chinaGuide/cityInfo',
      'china-guide/attractions' => 'chinaGuide/attractions',
      'china-guide/attractions/<id:\d+>-<title:.*?>' => 'chinaGuide/recommandAttractionView',
      'china-guide/culture' => 'chinaGuide/CultureIndex',
	'china-city-guide-article-<title:.*?>-<id:\d+>'=>'chinaGuide/articleView',
	'china-guide/chinesae-culture/catid-<onecatid:\d+>-<catid:\d+>/<title:.*?>-<articleid:\d+>'=>'chinaGuide/cultureView',
	'china-guide/chinesae-culture/catid-<onecatid:\d+>-<catid:\d+>/<title:.*?>'=>'chinaGuide/cultureView',
	'china-guide/chinesae-culture/<title:.*?>-<cultureid:\d+>'=>'chinaGuide/cultureList',
	'china-guide/chinesae-culture'=>'chinaGuide/cultureIndex',
	'china-guide/us-first-lady-visit'=>'chinaGuide/usFirstLadyVisit',
      'things' => 'chinaGuide/things',
      'things-list/<title:.*>-<catid:\d+>' => 'chinaGuide/thingsList',
      'things-list' => 'chinaGuide/thingsList',
      'things/<title:.*>-<id:\d+>.html' => 'chinaGuide/thingsArticle',
	
      'china-<cityname:.*>-attractions' => 'chinaGuide/cityAttraction',
      'china-<cityname:.*>-attractions/<title:.*>-<id:\d+>.html' => 'chinaGuide/attractionView',
      'china-<cityname:.*?>-<title:.*>-guide-<catid:\d+>'=>'chinaGuide/guideContentView',

      //cityTours
      'city-tours'=>'cityTours/index',
      'air-tours'=>'cityTours/airView',
      'beijing-tours' => 'cityTours/beijingTourSearch',
      'beijing-side-trips' => 'cityTours/beijingSideTrips',
      'day-tours-in-beijing' => 'cityTours/dayInBeijingTours',
      'city-<title:.*>/best-tours' => 'cityTours/best',
      'city-<title:.*?>'=>'cityTours/list',
      'search-<title:.*>'=>'cityTours/search',

      //huangshan
      'timetable/how-to-get-to-<title:.*>' =>  'cityTours/flightTimetable',

      //shanghai to beijing tour
      'beijing-shanghai-tours' => 'shanghaiBeijingTours/index',
      'beijing-xian-shanghai-tours' => 'shanghaiBeijingTours/beijingshanghaixian',
      'beijing-shanghai-tours/seats-and-cabin' => 'shanghaiBeijingTours/seatsAndCabin',
      'beijing-shanghai-tours/beijing-transfer-service' => 'shanghaiBeijingTours/beijingTransferService',
      'beijing-shanghai-tours/shanghai-transfer-service' => 'shanghaiBeijingTours/shanghaiTransferService',
      'beijing-shanghai-tours/how-to-book-and-take-train' => 'shanghaiBeijingTours/howToBookAndTakeTrain',
      'beijing-shanghai-tours/train-timetable' => 'shanghaiBeijingTours/trainSchedule',
      'beijing-shanghai-tours/flight-timetable' => 'shanghaiBeijingTours/flightSchedule',
      'beijing-shanghai-tours/<title:.*>' => 'shanghaiBeijingTours/search',

      //beijing xian tours
      'beijing-xian-tours' => 'beijingXianTours/index',
      'beijing-xian-tours/seats-and-cabin' => 'beijingXianTours/seatsAndCabin',
      'beijing-xian-tours/beijing-transfer-service' => 'beijingXianTours/beijingTransferService',
      'beijing-xian-tours/xian-transfer-service' => 'beijingXianTours/xianTransferService',
      'beijing-xian-tours/how-to-book-and-take-train' => 'beijingXianTours/howToBookAndTakeTrain',
      'beijing-xian-tours/train-timetable' => 'beijingXianTours/trainSchedule',
      'beijing-xian-tours/flight-timetable' => 'beijingXianTours/flightSchedule',
      'beijing-xian-tours/<title:.*>' => 'beijingXianTours/search',

      //shanghai xian tours
      'shanghai-xian-tours' => 'shanghaiXianTours/index',
      'shanghai-xian-tours/seats-and-cabin' => 'shanghaiXianTours/seatsAndCabin',
      'shanghai-xian-tours/shanghai-transfer-service' => 'shanghaiXianTours/shanghaiTransferService',
      'shanghai-xian-tours/xian-transfer-service' => 'shanghaiXianTours/xianTransferService',
      'shanghai-xian-tours/how-to-book-and-take-train' => 'shanghaiXianTours/howToBookAndTakeTrain',
      'shanghai-xian-tours/train-timetable' => 'shanghaiXianTours/trainSchedule',
      'shanghai-xian-tours/flight-timetable' => 'shanghaiXianTours/flightSchedule',
      'shanghai-xian-tours/<title:.*>' => 'shanghaiXianTours/search',
	  // coupon
	 'rules-for-coupon-usage' => 'rulesForCouponUsage/index',

      //shanghai huangshan tours
      'shanghai-to-huangshan-tours.html' => 'shanghaiHuangshanTours/index',

      //reviews
      'reviews/index' => 'reviews/index',
      'reviews/<title:.*>-<cityid:\d+>' => 'reviews/list',
      'share-your-reviews' => 'reviews/share',
      'guest-reviews' =>'reviews/guestReviews',

      //payment
      'online-payments.html' => 'payment/payment',
      'save-money.html' => 'payment/saveMoney',
      'terms-and-conditions.html' => 'payment/termsAndConditions',

      //diy tour
      'china-diy-tours' => 'diyTour/index',

      //行程详情
      'china-<title:.*>-<id:\d+>.html' => 'toursPackage/view',

      //hotel
      /*
      '<cityname:.*?>-hotels-<hotelid:\d+>'=>'hotel/list',  
      '<hotelname:.*?>-<hotelid:\d+>'=>'hotel/view',
      */

      //default
      '<controller:\w+>/<id:\d+>'=>'<controller>/view',
      '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
      '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
      ),
    );
