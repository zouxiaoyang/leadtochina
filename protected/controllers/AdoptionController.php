<?php

class AdoptionController extends Controller
{
	public function actionIndex()
	{
		$id = isset($_GET['id'])?$_GET['id']:1;

		$res = $this->getAdoption($id);

		$this->render('index',array('res'=>$res));
	}


	protected function getAdoption($id){
		
		$id = $id!=1?$_GET['id']:1;

		$sql ="select aoa.*,apc.*,apc.name as or_name,c.name as city_name from `t_adoption_orphanage_address` as `aoa`,`jos_cos_city` as `c`,`t_adoption_package_content` as `apc` where `aoa`.`cityid`=`c`.`id` and `aoa`.`id`=`apc`.`pacakage_id` and `aoa`.`id`={$id}";

		$res =Yii::app()->db->createCommand($sql)->queryRow();

		// var_dump($res);exit;
		
		return $res;

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