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

		return $ress;

	}

	public function actionChinaTours(){

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