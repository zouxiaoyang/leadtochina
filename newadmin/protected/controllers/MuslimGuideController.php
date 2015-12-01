<?php

class MuslimGuideController extends Controller
{
	public $layout='//layouts/main';

	/**
	 * Lists all models.
	 */

	public function actionIndex()
	{
		$this->setPageHeader();
		$this->render('index',array(
		));
	}

	public function actionMuslimShoppingIndex()
	{
		$this->setShoppingPageHeader();
		$hotMulslimShoppingArticles=MuslimContents::getHotMuslimShoppingArticles();
		$this->render('muslimShoppingIndex',array(
			'hotMulslimShoppingArticles'=>$hotMulslimShoppingArticles,
		));
	}

	public function actionMuslimShoppingList()
	{
		$muslimCityShoppingList=MuslimContents::getMuslimCityShoppingList($_GET['cityid']);
		$shoppingCity=JosCosCity::model()->findByPk($_GET['cityid']);
		$this->setShoppingPageHeader("Shopping in ".$shoppingCity->name);
		$this->render('muslimShoppingList',array(
			'muslimCityShoppingList'=>$muslimCityShoppingList,
			'shoppingCity'=>$shoppingCity,
		));
	}

	public function actionMuslimShoppingView()
	{
		$muslimShoppingArticle=MuslimContents::model()->findByPk($_GET['id']);
		$muslimShoppingCity=JosCosCity::model()->findByPk($muslimShoppingArticle->city_id);
		$muslimCityShoppingList=MuslimContents::getMuslimCityShoppingList($muslimShoppingArticle->city_id);
		$this->setShoppingPageHeader($muslimShoppingArticle->title);
		$this->render('muslimShoppingView',array(
			'muslimShoppingArticle'=>$muslimShoppingArticle,
			'muslimCityShoppingList'=>$muslimCityShoppingList,
			'muslimShoppingCity'=>$muslimShoppingCity,
		));
	}

	public function actionMuslimMosquesIndex()
	{
		$this->setMosquesPageHeader();
		$this->render('muslimMosquesIndex',array(
		));
	}

	public function actionMuslimMosquesList()
	{
		$muslimCityMosquesList=MuslimContents::getMuslimCityMosquesList($_GET['cityid']);
		$mosquesCity=JosCosCity::model()->findByPk($_GET['cityid']);
		$this->setMosquesPageHeader($mosquesCity->name." Mosques");
		$this->render('muslimMosquesList',array(
			'muslimCityMosquesList'=>$muslimCityMosquesList,
			'mosquesCity'=>$mosquesCity,
		));
	}

	public function actionMuslimMosquesView()
	{
		$muslimMosquesArticle=MuslimContents::model()->findByPk($_GET['id']);
		$muslimMosquesCity=JosCosCity::model()->findByPk($muslimMosquesArticle->city_id);
		$muslimCityMosquesList=MuslimContents::getMuslimCityMosquesList($muslimMosquesArticle->city_id);
		$this->setMosquesPageHeader($muslimMosquesArticle->title);
		$this->render('muslimMosquesView',array(
			'muslimMosquesArticle'=>$muslimMosquesArticle,
			'muslimCityMosquesList'=>$muslimCityMosquesList,
			'muslimMosquesCity'=>$muslimMosquesCity,
		));
	}

	public function actionMuslimHalalFoodList()
	{
		$this->setHalalFoodPageHeader();
		$this->render('muslimHalalFoodList',array(
		));
	}

	public function actionMuslimHalalFoodView()
	{
		$muslimHalalFoodArticle=MuslimContents::model()->findByPk($_GET['id']);
		$muslimHalalCity=JosCosCity::model()->findByPk($muslimHalalFoodArticle->city_id);
		$muslimCityHalalList=MuslimContents::getMuslimCityHalalList($muslimHalalFoodArticle->city_id);
		$this->setHalalFoodPageHeader($muslimHalalFoodArticle->title);
		$this->render('muslimHalalFoodView',array(
			'muslimHalalFoodArticle'=>$muslimHalalFoodArticle,
			'muslimCityHalalList'=>$muslimCityHalalList,
			'muslimHalalCity'=>$muslimHalalCity,
		));
	}

	public function actionMuslimHalalRestaurantList()
	{
		$halalCity=JosCosCity::model()->findByPk($_GET['cityid']);
		$muslimCityHalalList=MuslimContents::getMuslimCityHalalList($_GET["cityid"]);
		$this->setHalalFoodPageHeader("Halal Food in ".$halalCity->name);
		$this->render('muslimHalalRestaurantList',array(
			'halalCity'=>$halalCity,
			'muslimCityHalalList'=>$muslimCityHalalList,
		));
	}

	public function actionMuslimHistoryList()
	{
		$this->setHistoryPageHeader();
		$this->render('muslimHistoryList',array(
		));
	}

	public function actionMuslimHistoryView()
	{
		$muslimHistoryArticle=MuslimContents::model()->findByPk($_GET['id']);
		$this->setHistoryPageHeader($muslimHistoryArticle->title);
		$this->render('muslimHistoryView',array(
			'muslimHistoryArticle'=>$muslimHistoryArticle,
		));
	}

	public function actionMuslimPrayerList()
	{
		$this->setPrayerPageHeader();
		$this->render('muslimPrayerList',array(
		));
	}

	public function actionMuslimPrayerTimeView()
	{
		$prayerTimeList=MuslimPrayerTime::getMuslimPrayerTimes();
		$this->setPrayerPageHeader(ucfirst($_GET['title'])." Prayer Time");
		$this->render('muslimPrayerTimeView',array(
			'prayerTimeList'=>$prayerTimeList,
		));
	}

	protected function setHistoryPageHeader($title="China Muslim History")
	{
		$this->setPageTitle($title);
		Yii::app()->clientScript->registerMetaTag('keywords',"Islam in china, china islamic History, China Muslim History");
		Yii::app()->clientScript->registerMetaTag('description',"Lead to China has details of China Muslim History and the recent situation.");
	}
	
	protected function setHalalFoodPageHeader($title="Halal Food in China")
	{
		$this->setPageTitle($title);
		Yii::app()->clientScript->registerMetaTag('keywords',"China muslim food, China islamic food, halal food, Halal Food in China, China Muslim restaurant, China Halal restaurant");
		Yii::app()->clientScript->registerMetaTag('description',"Leadtochina offers great China muslim tour packages with delicious islamic halal food in Chinese Muslim Restaurants.");
	}
	
	protected function setMosquesPageHeader($title="Mosques in China")
	{
		$this->setPageTitle($title);
		Yii::app()->clientScript->registerMetaTag('keywords',"Mosques in china, Msjid in china, China Mosques, Chinese Mosques");
		Yii::app()->clientScript->registerMetaTag('description',"Leadtochina has the details information of Mosques in China, Beijing, Shanghai,Xian, Lanzhou, Guangzhou etc.");
	}
	
	protected function setPrayerPageHeader($title="Prayer Time")
	{
		$this->setPageTitle($title);
		Yii::app()->clientScript->registerMetaTag('keywords',"Prayer times, Prayer time in china, Islam prayer times, Muslim prayer times in China");
		Yii::app()->clientScript->registerMetaTag('description',"Leadtochina has the accuratte Islamic prayer times for Muslim travels");
	}
	
	protected function setShoppingPageHeader($title="Shopping in China")
	{
		$this->setPageTitle($title);
		Yii::app()->clientScript->registerMetaTag('keywords',"China Muslim Market, China Islamic Market, China Muslim Shopping Places");
		Yii::app()->clientScript->registerMetaTag('description',"Leadtochina has information of Muslim Markets in China for Muslim Travelers have good shopping experience.");
	}

	protected function newMessage()
	{
		$model = new Message;
		if(isset($_POST['ajax']) && $_POST['ajax']==='message-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		if(isset($_POST['Message']))
		{
			$model->attributes=$_POST['Message'];
			if($model->save())
			{
				header("location:/succeed.html");
				Yii::app()->end();
			}
		}
		return $model;
	}
}
