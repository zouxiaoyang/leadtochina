<?php

class AdoptionController extends Controller
{
	public function actionIndex()
	{
		$id = isset($_GET['id'])?$_GET['id']:1;

		$res = $this->getAdoption($id);

		$this->render('index',array('res'=>$res));
	}


	public function actionShowMaps(){

		$id = isset($_GET['id'])?$_GET['id']:1;

		$res = $this->getAdoption($id);
	
		$this->render('adoption_map',array('res'=>$res));
	}



	protected function getAdoption($id){ //获取信息;
		
		$id = $id!=1?$_GET['id']:1;

		$sql ="select aoa.*,aoa.id as apt_id,apc.*,apc.name as or_name,c.name as city_name from `t_adoption_orphanage_address` as `aoa`,`jos_cos_city` as `c`,`t_adoption_package_content` as `apc` where `aoa`.`cityid`=`c`.`id` and `aoa`.`id`=`apc`.`pacakage_id` and `aoa`.`id`={$id}";

		$res =Yii::app()->db->createCommand($sql)->queryRow();

		// var_dump($res);exit;
		
		return $res;

	}

	public function actionCityMaps(){
	
		$cid = (int)$_GET['city_id'];
		
		$city_info = Yii::app()->db->createCommand("SELECT name FROM jos_cos_city where id=".$cid)->queryRow();

  		//get des about traveltool
		$city_map = Yii::app()->db->createCommand("SELECT * FROM jos_cos_citymap where cityid=".$cid)->queryAll();
		//print_r($maps);die;
		$pathway_name=$city_info['name'];
		$pathway_link="/".strtolower($city_info['name'])."/";
		/*
		$document->setTitle($city_info['name']." Map, Map of ".$city_info['name']." China, ".$city_info['name']." City, Tourist Map");
		$document->setMetaData('keywords',$city_info['name']." map, map of ".$city_info['name']." china, ".$city_info['name']." city map
		");
		$document->setDescription( $city_info['name']."maps including ".$city_info['name']." city map, ".$city_info['name']." tourist map and show you a clear guide of hotels, streets, public transportation and attractions maps of ".$city_info['name'].".");
		
		$document->addScript( '/js/map.js' );
		$pathway_name=$city_info['name'];
		$pathway_link="/".strtolower($city_info['name'])."/";
		// $pathway_addItem($city_info['name'].' Maps ',"");	

		$this->assignRef('cityname',$city_info['name']);
		$this->assignRef('maps',	$maps);	
		parent::display($tpl);
*/
		$this->render('city_maps',array(
			'pathway_name'=>$pathway_name,
			'pathway_link'=>$pathway_link,
			'cityname'=>$city_info['name'],
			'maps'=>$city_map
		));

	}
	// 游记;
	public function actionAdoptionArticle(){
	
	
		$this->render('adoption_article');
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