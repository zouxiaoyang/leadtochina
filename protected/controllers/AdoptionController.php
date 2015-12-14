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
	// 游记列表;
	public function actionAdoptionArticle(){

		$province_id =isset($_GET['province_id'])?(int)$_GET['province_id']:0;
		$title = isset($_GET['title'])?addslashes(trim($_GET['title'])):0;

		$where=array();
		if($province_id>0){ 
			$where[]=" `province_id`={$province_id}";
		}
		if(!empty($title)){
			$where[]=" `title` like '%{$title}%'";
		}
		$where = implode(' and',$where);
		if(!empty($where)){// search
			$sql ="select * from `t_adoption_orphanage_address_article` where {$where} order by `date` desc";
		}else{ // normal
			$sql ="select * from `t_adoption_orphanage_address_article` order by `date` desc";
		}
		$criteria=new CDbCriteria();
		$result = Yii::app()->db->createCommand($sql)->query();
		$cnt = $result->rowCount;
		$pages=new CPagination($cnt);
		$pages->pageSize=5; 
		$pages->applyLimit($criteria);

		$result=Yii::app()->db->createCommand($sql." LIMIT :offset,:limit"); 
		$result->bindValue(':offset', $pages->currentPage*$pages->pageSize); 
		$result->bindValue(':limit', $pages->pageSize); 
		$posts=$result->query();

		// get province;

		$provinces = Province::getAllProvince();

		$this->render('adoption_article',array(
			 'posts'=>$posts,
			 'pages'=>$pages,
			 'provinces'=>$provinces,
			  'cnt'=>$cnt,
			));
	}
	// 游记详细;
	public function actionAdoptionArticleDetail(){
	
		//var_dump($_GET['ar_id']);
		$ar_id = (int)$_GET['ar_id'];
		$sql="select * from `t_adoption_orphanage_address_article` where `id`={$ar_id}";
		$res = Yii::app()->db->createCommand($sql)->queryRow();

		$this->render('adoption_article_detail',array('res'=>$res));
	}
	// 游记详细;
	public function actionAdoptionArticleByProvince(){
	
	
		$this->render('adoption_article_by_province');
	}
   // adoption customer size;定制页面;
	public function actionAdoptionDiy(){
	
	
		$this->render('adoption_diy');
	}
// adoption search;
	public function actionAdoptionSearch(){
		
		$province_id =(int)$_GET['province_id'];
		$title = addslashes(trim($_GET['title']));
		$where=array();
		if($province_id>0){
			$where[]=" `province_id`={$province_id}";
		}
		if(!empty($title)){
			$where[]=" `title` like '%{$title}%'";
		}
		$where = implode(' and',$where);
		if(!empty($where)){
			$sql ="select * from `t_adoption_orphanage_address_article` where {$where} order by `date` desc";
			
			$criteria=new CDbCriteria();
			$result = Yii::app()->db->createCommand($sql)->query();
			$pages=new CPagination($result->rowCount);
			$pages->pageSize=5; 
			$pages->applyLimit($criteria);

			$result=Yii::app()->db->createCommand($sql." LIMIT :offset,:limit"); 
			$result->bindValue(':offset', $pages->currentPage*$pages->pageSize); 
			$result->bindValue(':limit', $pages->pageSize); 
			$posts=$result->query();
		
		}

	     //	var_dump(json_encode($posts));

		// get province;

		$provinces = Province::getAllProvince();

		$this->render('adoption_search',array(
			 'posts'=>$posts,
			 'pages'=>$pages,
			 'provinces'=>$provinces
			));

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