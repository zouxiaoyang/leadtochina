<?php

class BestChinaToursController extends Controller
{
	public function actionIndex()
	{
		$ress = $this->getTop10();

		$this->render('index',array('ress'=>$ress));
	}

	public function getTop10(){

		$sql="select * from `jos_cos_tours_package` where `category_parentid`=(select `id` from `jos_categories` where `alias`='best-tours')";

		$ress = Yii::app()->db->createCommand($sql)->queryAll(); 

//seo:
		$sql="select `seo_title`,`seo_key`,`seo_description` from `jos_categories` where `alias`='best-tours'";
		$res_seo = Yii::app()->db->createCommand($sql)->queryRow();
		Seo::_seo($this,$res_seo['seo_title'],$res_seo['seo_key'],$res_seo['seo_description']);

		return $ress;

	}

	public function actionChinaTours(){
		//seo:
		$t='China Tour, China Tour Packages, China Travel Tours';
		$k = 'china travel, china tours, travel china, china travel agent';
		$d = 'China Travel Agent offering China Tours, Yangtze Cruise Travel, China Flights, China Hotels Booking and huge China Travel Guide Info.';

		Seo::_seo($this,$t,$k,$d);

		$this->render('chinaTours');

	}

	// -----------------------------------------------------------
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}