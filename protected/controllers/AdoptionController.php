<?php

class AdoptionController extends Controller
{
	public function actionIndex()
	{
		$id = isset($_GET['id'])?$_GET['id']:1;

		$res = $this->getAdoption($id);

		$this->render('index',array('res'=>$res));
	}


	public function actionShowMaps(){ //  游记城市地图显示;

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

	public function actionCityMaps(){ // 游记城市地图调用;
	
		$cid = (int)$_GET['city_id'];
		
		$city_info = Yii::app()->db->createCommand("SELECT name FROM jos_cos_city where id=".$cid)->queryRow();

  		//get des about traveltool
		$city_map = Yii::app()->db->createCommand("SELECT * FROM jos_cos_citymap where cityid=".$cid)->queryAll();
		//print_r($maps);die;
		$pathway_name=$city_info['name'];
		$pathway_link="/".strtolower($city_info['name'])."/";
		/*seo 参数;
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

	// adoption search;
	public function actionAdoptionHome(){
		
		$this->render('adoption_home');
	}
// 收养团定制订单;
public function actionSaveOrder(){
   // $model=new Order;
    if($_POST['fullName']) {
      $_POST['full_Name'] = htmlspecialchars($_POST['gender'].$_POST['fullName']);
    }
    $_POST['url_referer'] = Yii::app()->request->urlReferrer;
    $destination = (isset($_POST['destination']))?implode(',', (array)$_POST['destination']):'';
    $_POST['destination'] = htmlspecialchars($destination);
    $_POST['submit_source'] = $_SERVER['HTTP_HOST'];
    $_POST['dateline'] = time();

    $other_message='';
    if($destination){
      $other_message.="<b>CHOOSE DESTINATIONS :</b>".$destination."<br />";
    }
    if(isset($_POST['services'])){
      $services=implode(',',(array)$_POST['services']);
      $other_message.="<b>CHOOSE SERVICES :</b>".htmlspecialchars($services)."</br>";
    }
    if(isset($_POST['hotelClass'])){
      $other_message.="<b>HOTEL CLASS :</b>".$_POST['hotelClass']." ".implode(',', (array)$_POST['smoking'])."<br />";
    }
    if(isset($_POST['roomClass'])){
      $other_message.="<b>ROOM CLASS :</b>".implode(',', (array)$_POST['roomClass'])."<br />";
    }

    if(isset($_POST['birthplace'])){
      $other_message.="<b>Birthplace :</b>".implode(',', (array)$_POST['birthplace'])."<br />";
    }
    if(isset($_POST['activities'])){
      $other_message.="<b>Activities :</b>".implode(',', (array)$_POST['activities'])."<br />";
    }
    if(isset($_POST['otherMessage'])){
      $other_message.="<b>OTHER MESSAGE :</b>".htmlspecialchars($_POST['otherMessage'])."<br />";
    }
    if(isset($_POST['city'])){
      $cities = implode(',', $_POST['city']);
      $other_message.="<b>Tourism Cities :</b>".htmlspecialchars($cities)."<br />";
    }
// new 
    if(isset($_POST['orphange_nanme'])){
      $other_message.="<b>Orphanage Name :</b>".htmlspecialchars($_POST['orphange_nanme'])."<br />";
    }
	if(isset($_POST['other_city'])){
      $other_message.="<b>Other City :</b>".htmlspecialchars($_POST['other_city'])."<br />";
    }

	if(isset($_POST['other_hotel'])){
      $other_message.="<b>more idea on hotel :</b>".htmlspecialchars($_POST['other_hotel'])."<br />";
    }
	    if(isset($_POST['other_meals'])){
      $other_message.="<b>Meal Plan :</b>".htmlspecialchars($_POST['other_meals'])."<br />";
    }
//end;

    if(isset($_POST['activities_for_families'])){
      $activities_for_families = implode(',', $_POST['activities_for_families']);
      $other_message.="<b>Activities for Families :</b>".htmlspecialchars($activities_for_families)."<br />";
    }

    if(isset($_POST['other_activities'])){
      $other_message.="<b>Other Activities:</b>" . htmlspecialchars($_POST['other_activities']) ."<br />";
    }

    if(isset($_POST['Duration'])){
      $other_message.="<b>Duration :</b>".htmlspecialchars($_POST['Duration'])."<br />";
    }
    if(isset($_POST['starting_date'])){
      $other_message.="<b>Starting Date :</b>".htmlspecialchars($_POST['starting_date'])."<br />";
    }

    if(isset($_POST['ending_date'])){
      $other_message.="<b>Ending Date :</b>".htmlspecialchars($_POST['ending_date'])."<br />";
    }

    if(isset($_POST['star'])){
      $other_message.="<b>Hotel Class Star :</b>".htmlspecialchars($_POST['star'])."<br />";
    }

    if(isset($_POST['tour_space'])){
      $other_message.="<b>Tour Space :</b>".htmlspecialchars($_POST['tour_space'])."<br />";
    }

    if(isset($_POST['tour_for'])){
      $other_message.="<b>Tour For :</b>".htmlspecialchars($_POST['tour_for'])."<br />";
    }

    if(isset($_POST['guide_language'])){
      $guide_language = implode(',', $_POST['guide_language']);
      $other_message.="<b>Guide Language :</b>".htmlspecialchars($guide_language)."<br />";
    }

    if(isset($_POST['in_you_team'])){
      $other_message.="<b>In you team :</b>".htmlspecialchars($_POST['in_you_team'])."<br />";
    }

    $_POST['user_ip'] = Yii::app()->request->userHostAddress;
    $_POST['ordertype']=12;// 收养团下单方式
    $_POST['other_message'] = addslashes($other_message);
    $_POST['other_travelinfo'] = addslashes($other_message);


   // $model->attributes = $_POST;
	
	//var_dump($_POST);exit;
	// insert database;

	 $sql="insert into `joomla`.`jos_total_order` set `full_name`='{$_POST['full_Name']}',`gender`='{$_POST['gender']}',`nationality`='{$_POST['nationality']}',`email`='{$_POST['email']}',`other_email`='{$_POST['other_email']}',`phone`='{$_POST['phone']}',`adults`={$_POST['adults']},`children`={$_POST['children']},`infant`={$_POST['infant']},`entry_date`='{$_POST['starting_date']}',`duration`='{$_POST['Duration']}',`other_travelinfo`='{$_POST['other_travelinfo']}',`url_referer`='{$_POST['url_referer']}',`submit_source`='{$_POST['submit_source']}',`user_ip`='{$_POST['user_ip']}',`dateline`='{$_POST['dateline']}',`ordertype`={$_POST['ordertype']},`other_message`='{$_POST['other_message']}'";

	$bol = Yii::app()->db->createCommand($sql)->execute();
	
    if($bol){
      $insertId =Yii::app()->db->getLastInsertID();
      $order_str = 'ADOPTION'.date("ymd").$insertId;
	  Yii::app()->db->createCommand("update `joomla`.`jos_total_order` set `orderNO`='{$order_str}' where `id`={$insertId}")->execute();
	  // success page;
      $this->redirect('/travel/success');
    }
    exit;
  }

  public function actionFamilyActivity(){
	
	$this->render('adoption_family_activity');
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