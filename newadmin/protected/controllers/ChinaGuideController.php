<?php
class ChinaGuideController extends Controller
{

	public function actionIndex(){
		$this->setPageTitle("China Travel Guide, China City Guide, China Attractions, Culture and Others");
		Yii::app()->clientScript->registerMetaTag('keywords',"china guide, travel china guide, china travel guide, china tour guide");
		Yii::app()->clientScript->registerMetaTag('description',"Huge info about China Travel including China City Guide, Attraction Guide, Culture, Maps, Videos, Pictures and other travel tips are collected by us.");
		$topthingsList=Yii::app()->db->createCommand("select id,title,alias,introtext,images from jos_content where state='1' and sectionid='7' order by index_recommend desc,id desc limit 5")->queryAll();
		$guideCity=Yii::app()->params['chinaGuideCity'];
		$travelTips=Content::getGuideTravelTips();
		$travelTools=Content::getGuideTravelTools();
		$this->render('chinaGuide',array(
			'guideCity'=>$guideCity,
			'travelTips'=>$travelTips,
			'travelTools'=>$travelTools,
			'topthingsList'=>$topthingsList,
		));
	}

	public function actionCityGuide()
	{
		$this->setPageTitle("China City Guide, Travel China Guide, China Destinations");
		Yii::app()->clientScript->registerMetaTag('keywords','china vacations, china city guide, travel china guide');
		Yii::app()->clientScript->registerMetaTag('description','China city guide offers city attractions, maps, tours, tips, shopping, climate and other useful things to do about China vacations.');
		$this->render('cityGuide');
	}
	
	public function actionCityInfo()
	{
		$cityInfo = JosCosCity::model()->findByAttributes(array('name'=>$_GET['cityname']));
		if(!$cityInfo){
			throw new CHttpException(404, 'Page not found');
		}
		$cityId = $cityInfo->id;

		$cityGuideInfo = CityGuideIndexInfo::model()->findByAttributes(array('cityid'=>$cityId));
		$cityMapsRecommend = Citymap::model()->findAll(array(
			'condition' => "cityid=$cityId",
			'limit' => 6
			)
		);
		$recommendTours = ToursPackage::getCityToursByCityname($cityInfo->name);

		$this->render('cityInfoNew', array(
			'cityInfo' => $cityInfo,
			'cityGuideInfo' => $cityGuideInfo,
			'citymaps' => $cityMapsRecommend,
			'recommendTours'=>$recommendTours,
		));
		/*
		return;
		$attractions=Yii::app()->db->createCommand("SELECT id,name FROM jos_cos_scenery WHERE published=1 and hot=1 and cityid='$cityId' order by id desc limit 10")->queryAll();
		$cityTours=ToursPackage::getCityTours($cityId);
		
		$this->render('cityInfo',array(
			'cityInfo'=> $cityInfo,
			'fats'=>Content::getCityFats($cityId),
			'attractions'=>$attractions,
			'cityTours'=>$cityTours,
			'maps'=>Content::getCityMaps($cityId),
		));
		*/
	}
	
	public function actionArticleView(){
		$this->render('articleView',array(
		
		));
	}
	
	public function actionGuideContentView(){
		$catid = $_GET['catid'];
		$cityInfo = JosCosCity::model()->findByAttributes(array('name'=>$_GET['cityname']));
		if(empty($cityInfo) || empty($_GET['catid'])){
			throw new CHttpException(404, 'Page not found');
		}
		$cityId = $cityInfo->id;
		$guideContent=Content::getGuideContent($cityId,$catid);

		$cityName = $cityInfo->name;
		if($catid == 42){ //Facts
			$title = $cityInfo->name." Facts, Introduction of China ".$cityInfo->name." Location, History, Must-see";
			$description = $cityInfo->name." Facts including ".$cityInfo->name." location, history, geography, population, brief introduction and must-see attractions.";
		}elseif($catid == 43){ //Nightlife
			$title = "$cityName Nightlife, China $cityName Performance, Bars, Pub, KTV ";
			$description = "$cityName nightlife information about China $cityName Traditional Performance, Bars, Pubs and KTV.";
		}elseif($catid == 41){ //Shanghai Food and Restaurants
			$title = " Eating in $cityName, China $cityName Food, Restaurants, Cuisine, Dinning";
			$description =  "Collection of $cityName Food information including $cityName local famous cuisine, snack and restaurants in $cityName. Eating around $cityName.";	
		}elseif($catid == 265){ //Travel Tips
			$title = "$cityName Travel Tips, Useful Tour Tips for Traveling $cityName China ";
			$description = " Collection of $cityName travel tips and show you special notes like emergency call for tourists to travel in $cityName China.";
		}elseif($catid == 266){ //Climate
			$title = "$cityName Weather, $cityName Climate, Best Time to Visit $cityName";
			$description = "$cityName climate introduction and Beijing weather forecast of the following three days. Get to know and choose the best time to visit $cityName.";
		}elseif($catid == 264){ //Transportation	
			$title = "$cityName Transportation, Bus, Subway, Taxi, Flights, Train to/from $cityName";
			$description = "$cityName Transportation information offers you $cityName train, flight, bus, taxi, subway and other public tranportation ways of traveling around $cityName China.";
		}
		$this->setPageTitle($title);
  	Yii::app()->clientScript->registerMetaTag('description',$description);
		$this->render('guideContentView',array(
			'cityInfo'=>$cityInfo,
			'guideContent'=>$guideContent,
		));
	}

	public function actionAttractions(){
		$this->setPageTitle("China Attractions, Tourist Attraction of China");
		Yii::app()->clientScript->registerMetaTag('keywords',"china attractions, tourist attraction of china, china places to visit");
		Yii::app()->clientScript->registerMetaTag('description',"Collection of all China attractions including top tourist attraction of china, Nature Scenery, Historical and Cultural Sites... Show you best places to visit.");
		$this->render('attractions',array(
			'attractions'=>Categories::getAttractionCategory(),
			'recommendAttractions'=>JosCosScenery::model()->findAll(array('condition'=>'index_recommend=1')),
		));
	}

	public function actionCityAttraction()
	{
		$cityInfo = JosCosCity::model()->findByAttributes(array('name'=>$_GET['cityname']));
		if(empty($cityInfo)){
			throw new CHttpException(404, 'Page not found');
		}
		$cityId = $cityInfo->id;
		$criteria=new CDbCriteria(array(
	        'condition' => "cityid='$cityId'",
	        'order'=> 'id asc',
	    ));
	    $count = JosCosScenery::model()->countByAttributes(array(
            'cityid'=> "$cityId"
        ));

	    if($count > 20){ // new layout
	    	$categories_arr = $categories_obj = $scenerires_obj = array();
	    	$sql = "select group_concat(categoreid) as categories from jos_cos_scenery where cityid='$cityId'";
	    	$categories = Yii::app()->db->createCommand($sql)->queryRow();
	    	
	    	if($categories){
	    		$temp = explode(',', $categories['categories']);
	    		$categories_arr = array_unique($temp);
	    		$categories_obj = Categories::model()->findAllByPk($categories_arr);

	    		$scenerires_obj = JosCosScenery::model()->findAllByAttributes(array(
	            	'cityid'=> "$cityId",
	        	));
	    	}
	    	
	   		$this->render('cityAttraction2', array(
				'categories_obj'=>$categories_obj,
				'scenerires_obj'=>$scenerires_obj,
				'cityInfo'=>$cityInfo,
			));
   		}else{
   			$dataProvider = new CActiveDataProvider('JosCosScenery', array(
		        'pagination'=>array(
		          'pageSize'=>10,
		        ),
		        'criteria'=>$criteria,
	    	));

			$this->render('cityAttraction', array(
				'dataProvider'=>$dataProvider,
				'cityInfo'=>$cityInfo,
			));
		}
	}

	public function actionAttractionView()
	{
		$id = $_GET['id'];
		$scenery = JosCosScenery::model()->findByPk($id);
		if(empty($scenery)){
			throw new CHttpException(404, 'Page not found');
		}
		$this->render('attractionView', array(
			'scenery' => $scenery
		));
	}
	
	public function actionRecommandAttractionView(){
		$id = $_GET['id'];
		$scenery = JosCosScenery::model()->findByPk($id);
		if(empty($scenery)){
			throw new CHttpException(404, 'Page not found');
		}
		$this->render('recommandAttractionView',array(
			'scenery' => $scenery
		));
	}

	public function actionCultureIndex(){
		$this->setPageTitle("Chinese Culture, China Traditional Culture, Art, Food, History");
		Yii::app()->clientScript->registerMetaTag('keywords',"chinese culture, china culture, Chinese customs");
		Yii::app()->clientScript->registerMetaTag('description',"Comprehensive introduction of Chinese Culture including ChineseTraditions, Arts,  Food and Health, Chinese History, Architecture, Chinese Literature and other China  culture guide.");
		$this->render('cultureIndex',array(
			'chinaCultureList'=>Categories::getCultureCategory(),
		));
	}

	public function actionCultureList(){
		$oneCatId=Yii::app()->getRequest()->getParam('cultureid');
		$thisCategory=Categories::model()->findByPk($oneCatId);
		$this->setPageTitle($thisCategory->seo_title);
		Yii::app()->clientScript->registerMetaTag('keywords',$thisCategory->seo_key);
		Yii::app()->clientScript->registerMetaTag('description',$thisCategory->seo_description);
		$view = "cultureList";
		if($oneCatId == 704){
			$view = "cultureList704";
		}
		$this->render($view, array(
			'onecatid'=>$oneCatId,
			'subCategoryList'=>Categories::getSubCategoryList($oneCatId),
			'thisCategory'=>$thisCategory,
		));
	}

	public function actionCultureView(){
		$catId=Yii::app()->getRequest()->getParam('catid');
		$articleId=Yii::app()->getRequest()->getParam('articleid');
		$oneCateId=Yii::app()->getRequest()->getParam('onecatid');
		$oneCategory=Categories::model()->with('subCategory')->findByPk($oneCateId);
		$articleList=Chinaculture::model()->findAllByAttributes(array('catid'=>$catId,'enable'=>'1'));
		if(!$articleId) $articleId=$articleList[0]->id;
		$thisArticle=Chinaculture::model()->findByPk($articleId);
		if(empty($thisArticle)){
			throw new CHttpException(404,'Page not found');
		}
		/*
		$this->setPageTitle($thisArticle->seo_title);
		Yii::app()->clientScript->registerMetaTag('keywords',$thisArticle->seo_key);
		Yii::app()->clientScript->registerMetaTag('description',$thisArticle->seo_description);		
		*/
		$this->setPageTitle($thisArticle->title);
		Yii::app()->clientScript->registerMetaTag('keywords',$thisArticle->title);
		
		$this->render('cultureView',array(
			'catid'=>$catId,
			'oneCategory'=>$oneCategory,
			'articleList'=>$articleList,
			'thisArticle'=>$thisArticle,
		));
	}

	public function actionThings()
	{
		$new_contents = Yii::app()->db->createCommand("select a.id,a.title,a.introtext,b.pic_path from jos_content a 
					left join jos_cos_contentpic b on a.id=b.contentid 
					where a.sectionid=7 and state=1 order by a.id desc limit 9")->queryAll();
		$this->render('things', array(
			'new_contents' => $new_contents
		));
	}

	public function actionThingsList()
	{

		if($_GET['catid']){
			$condition = 'state=1 and catid='.(int)$_GET['catid'];
		}else{
			$condition = 'sectionid=7 and state=1';
		}
		$criteria=new CDbCriteria(array(
        'select' => array('id,title'),
        'condition' => $condition, // things to do sectionid
        'order' => 'id desc',
		));
		$dataProvider = new CActiveDataProvider('Content', array(
        'pagination'=>array(
          'pageSize'=>20,
          'pageVar' => 'p',
					),
        'criteria'=>$criteria,
		));

		$this->render('thingsList',array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionThingsArticle()
	{
		$message = Message::newMessage();
		$content = Content::model()->findByPk($_GET['id']);
		if(empty($content)){
			throw new CHttpException(404, 'Page not found');
		}
		$this->render('thingsArticle',array(
      	'model' => $message,
			'content' =>$content,
		));
	}

	public function actionUsFirstLadyVisit(){
		$this->setPageTitle("US first lady's visit expected to boost goodwill");
		$this->render("usFirstLadyVisit");
	}
}
