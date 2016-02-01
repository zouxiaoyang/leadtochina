<?php

class FamilyToursController extends Controller
{
	public function actionIndex()
	{
		// seo;
		$k='China Family Tours, china best Family tours';
		$t = 'China Family Tours, China Best Family Tours, Top China Family Tours';
		$d='China Travel Company offering China Family tours';
		Seo::_seo($this,$t,$k,$d);
		$sql="select * from `jos_cos_tours_package` where `category_parentid`=(select `id` from `jos_categories` where `alias`='china-family-tour') and id in (1083,1084,1085,1086)";

		$ress = Yii::app()->db->createCommand($sql)->queryAll(); 

		$this->render('index',array('ress'=>$ress));
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