<?php

class MuslimTourController extends Controller
{
	public $layout='//layouts/main';

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$this->setPageTitle("China Muslim Tour Company, China Islam Tour Operator");
		Yii::app()->clientScript->registerMetaTag('keywords',"China Muslim Tour Packages, China Islamic Tours, China Muslim Travel Agency, China Muslim Travel");
		Yii::app()->clientScript->registerMetaTag('description',"HFV-China Muslim Tour Company provides best China Muslim Tour Packages and halal holidays for Muslim travellers in 2013");
		$indexMosquesRecommend=MuslimContents::getIndexMosquesRecommend();
		$this->render('index',array(
			'indexMosquesRecommend'=>$indexMosquesRecommend,
		));
	}
	
	public function actionAjaxCityTours(){
		MuslimPackages::getAjaxCityTours();
		Yii::app()->end();
	}

	public function actionMuslimChinaTour(){
		$this->setPageTitle("China Muslim Travel Packages, China Islamic Tours");
		Yii::app()->clientScript->registerMetaTag('keywords',"China Muslim Travel, China Muslim Tours Package, China Halal Travel, China Muslim China Travel");
		Yii::app()->clientScript->registerMetaTag('description',"HFV-China Islamic Tour Operator offers best China Muslim Travel packages with service guaranteed");
		$muslimChinaTourList=MuslimPackages::getMuslimChinaTour();
		$this->render('muslimChinaTour',array(
			'muslimChinaTourList'=>$muslimChinaTourList
		));
	}

	public function actionMuslimCityTour(){
		$cityId=$_GET['cityid'];
		$cityName=JosCosCity::model()->findByPk($cityId)->name;
		$this->setCityTourPageHeader($cityName);
		$muslimCityTours=MuslimPackages::getMuslimCityTours($cityId);
		$this->render('muslimCityTour',array(
			'muslimCityTours'=>$muslimCityTours,
		));
	}

	public function actionMuslimCityTourIndex(){
		$this->setCityTourPageHeader();		
		$muslimRecommendCities=JosCosCity::getMuslimRecommendCities();
		$this->render('muslimCityTourIndex',array(
			'muslimRecommendCities'=>$muslimRecommendCities,
		));
	}


	protected function setCityTourPageHeader($cityName="China")
	{
		$this->setPageTitle("$cityName City Muslim Tour");
		Yii::app()->clientScript->registerMetaTag('keywords',"Muslim Single City Tours, Single City Muslim Tours, Muslim China City Tours");
		Yii::app()->clientScript->registerMetaTag('description',"HFV-China muslim travel operator provides best Muslim Single City Tours for muslim travellers with low price");
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
