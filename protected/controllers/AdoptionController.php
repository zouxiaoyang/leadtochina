<?php
class AdoptionController extends Controller
{
	public function actions() {
		return array(
		   'captcha'=> array(  
			  'class'=>'CCaptchaAction',
		));
	  }
	public function actionIndex()
	{
		$id = isset($_GET['id'])?(int)$_GET['id']:1;
		$res = $this->getAdoption($id);
		$pics = $this->getAdoptionPic($id);
		$article = $this->actionAdoptionArticleByAid($id);
		$this->render('index',array('res'=>$res,'pics'=>$pics,'article'=>$article));
	}
	public function actionShowMaps(){ //  游记城市地图显示;
		$id = isset($_GET['id'])?(int)$_GET['id']:1;
		$res = $this->getAdoption($id);
		$this->render('adoption_map',array('res'=>$res));
	}
	protected function getAdoption($id){ //获取信息;
		$id = $id!=1?$_GET['id']:1;
		$sql ="select aoa.*,aoa.id as apt_id,aoa.description as des,apc.*,apc.name as or_name,c.name as city_name1 from `t_adoption_orphanage_address` as `aoa`,`jos_cos_city` as `c`,`t_adoption_package_content` as `apc` where `aoa`.`cityid`=`c`.`id` and `aoa`.`id`=`apc`.`pacakage_id` and `aoa`.`id`={$id}";
		$res =Yii::app()->db->createCommand($sql)->queryRow();
		// var_dump($res);exit;
		$t=sprintf('%s Orphanage Trip Guide, %s SWI Visit',$res['city_name1'],$res['city_name1']);
		$k='';
		$d=sprintf("We are offering %s orphanage trip guide, private &amp; small group tours to %s SWI.",$res['city_name1'],$res['city_name1']);
		Seo::_seo($this,$t,$k,$d);
		return $res;
	}
	protected function getAdoptionPic($id){ //获取图片信息;
		$id = $id!=1?(int)$_GET['id']:1;
		$sql ="select `pic` from `t_adoption_orphanage_address_pic` where `oid`={$id}";
		$res =Yii::app()->db->createCommand($sql)->queryAll();
		// var_dump($res);
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
		$title ='China Homeland & Heritage Tours Reviews, Reviews on China Adoption Reunion Tours';
		$k='china homeland tour review，reviews chinese adoptee heritage tours.';
		$des = 'Read about the verified reviews on China homeland tours from adoptive families here.';
		Seo::_seo($this,$title,$k,$des);
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
		// seo;
		$title = $res['title'];
		$k='chinese heritage tour reviews，china homeland tour review，reviews for china homeland tours，china  heritage tour reviews';
		$des=substr(strip_tags($res['content']),0,128).'...';
		Seo::_seo($this,$title,$k,$des);
		$this->render('adoption_article_detail',array('res'=>$res));
	}
	// 游记详细;
	public function actionAdoptionArticleByProvince(){

		$provinceId=$_GET['province_id'];

		//Recommended tour of this province
		$packageProvince=AdoptionPackage::getRecommendpackage($provinceId);


		$province_id = (int)$_GET['province_id'];
		$sql="select * from `jos_cos_province` where `id`=".$province_id."";
		$res = Yii::app()->db->createCommand($sql)->queryRow();
		$sql="select * from `t_adoption_orphanage_address` where `provinceid`=".$province_id."";
		$adoption_info = Yii::app()->db->createCommand($sql)->queryAll();
		$this->render('adoption_article_by_province',array(
			'res'=>$res,
			'adoption_info'=>$adoption_info,
			'packageProvince'=>$packageProvince[0],
			'provinceid'=>$provinceId,
		));
	}
	// 具体福利院游记;
	protected function actionAdoptionArticleByAid($aid){
	
		$sql ="select * from `t_adoption_orphanage_address_article` where `aid`={$aid}";
		$res = Yii::app()->db->createCommand($sql)->queryAll();

		return $res;
	}
   // adoption customer size;定制页面;
	public function actionAdoptionDiy(){
		//seo;
		$title ='LeadToChina - CustomizeAdoption Adoption';
		$k='';
		$d='';
		Seo::_seo($this,$title,$k,$d);

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
// seo;
	$title = 'China Adoption Homeland Tours, China Adoption Travel, China Heritage Tour';
	$keywords = 'china homeland tours, china adoption travel, china heritage tour';
	$description = 'Lead to China Company is specialized in operating China homeland tours, China heritage tour, China root-seeking Tour and visit to orphanage etc. Customize China adoption travel now and save more';
	Seo::_seo($this,$title,$keywords,$description);
// 最新的3条游记;
	$sql = "select `id`,`pic`,`content`,`title`,`date` from `t_adoption_orphanage_address_article` order by `date` desc limit 3";
	$ress  = Yii::app()->db->createCommand($sql)->queryAll();
// form
	$model = new Message;
	if(isset($_POST['Message'])){
		CActiveForm::validate($model); // form validate;
		if(isset($_POST['Message'])){
			  $model->attributes=$_POST['Message'];
			  $model->ip=SiteUtils::getClientIp();
			  $model->referer_url=Yii::app()->request->urlReferrer;
			  $model->dateline = time();
			  if($model->save()){
				$this->redirect('/travel/success');
				Yii::app()->end();
			  }
			}
	   }
		$this->render('adoption_home',
			array(
				'message' => $model,
				'ress'=>$ress,
			));
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
	  //seo;
	 $title = 'Special Activities for Children and Family Trips to China';
	 $k='';
	 $des='We offers a different set of special activities for the adoptive family, such as watching a kungfu performance, flying kites, riding bicycle on the Ancient City Wall, making dumplings with a local family and so on.';
	Seo::_seo($this,$title,$k,$des);

	$this->render('adoption_family_activity');
  }
    public function actionGetCity($provinceid){
    $db = Yii::app()->db;
    $list= Yii::app()->db->createCommand('select id,name from jos_cos_city where provinceid=:provinceid')->bindValue('provinceid',$provinceid)->queryAll();
    echo CJSON::encode($list);
    Yii::app()->end();
  }
  public function actionSearchOrphanageAddress(){
    $q = isset($_GET["q"])?addslashes($_GET["q"]):'';
    $provinceid = (int) $_GET['provinceid'];
    $cityid = (int) $_GET['cityid'];
    $where = '';
    if($provinceid) $condition[] = " provinceid='$provinceid'";
    if($cityid)   $condition[] = " cityid='$cityid'";
    if($q) $condition[] = " orphanage_name like '%$q%'";
    if($condition) $where = "where " . implode(" and ", $condition);
    $list = Yii::app()->db->createCommand("select id,orphanage_name from t_adoption_orphanage_address $where")->queryAll();
    if(isset($_GET['format'])){
      echo CJSON::encode($list);
    }else{
      foreach($list as $v){
        echo $v['orphanage_name']."|".$v['id']."\n";
      }
    }
    Yii::app()->end();
  }
 //Orphanage Address detail
  public function actionOrphanageTravelGuide(){
    // $this->layout = "adoption";
    $id = (int)$_GET['id'];
    $orphanage_address_info = AdoptionOrphanageAddress::model()->findByPk($id);
    if(empty($orphanage_address_info)) {
      throw new CHttpException(404,'The requested page does not exist.');
    }
    $cityinfo = JosCosCity::model()->findByPk($orphanage_address_info->cityid);
    /*
     $chinaGuideArticle=AdoptionContent::model()->findAll(array(
        'condition'=>'cat_id=6',
        'limit' => 4,
        'order' => 'dateline desc'
    ));
    */
    $orphanageArticles = AdoptionArticle::model()->findAllByAttributes(array('aid'=>$id));
    $chinaAdoptionGuide=AdoptionContent::model()->findAll(array(
        'condition'=>'cat_id=7',
        'limit' => 7,
        'order' => 'id desc'
    ));
    $chinaAdoptionCulture=AdoptionContent::model()->findAll(array(
        'condition'=>'cat_id=8',
    ));
    $chinaAdoptionCatid9=AdoptionContent::model()->findAll(array(
        'condition'=>'cat_id=9',
        'order' => 'id desc'
    ));
    $adoptionOrphanageAddressPic = AdoptionOrphanageAddressPic::model()->findAllByAttributes(array('oid'=>$id));
		$this->setPageTitle($cityinfo->name.' Orphanage Trip Guide, '.$cityinfo->name.' SWI Visit');
		Yii::app()->clientScript->registerMetaTag('keywords','');
		Yii::app()->clientScript->registerMetaTag('description','We are offering '.$cityinfo->name.' orphanage trip guide, private & small group tours to '.$cityinfo->name.' SWI.');
    $this->render("orphanageTravelGuide", array(
      'orphanage_address_info' => $orphanage_address_info,
      'cityinfo' => $cityinfo,
      'message' => Message::newMessage(),
      //'chinaGuideArticle' => $chinaGuideArticle,
      'orphanageArticles' => $orphanageArticles,
      'chinaAdoptionGuide' => $chinaAdoptionGuide,
      'chinaAdoptionCulture' => $chinaAdoptionCulture,
      'chinaAdoptionCatid9' => $chinaAdoptionCatid9,
      'adoptionOrphanageAddressPic' => $adoptionOrphanageAddressPic,
    ));
  }
  public function actionAdoptionList(){
	  //seo;
	  $title = 'LeadToChina - OrphanageList Adoption';
		$k = '';
		$des = '';
		Seo::_seo($this,$title,$k,$des);

	$sql ="SELECT aoa.orphanage_name,aoa.id as aoa_id,`aoa`.`provinceid`,cp.name as `cp_name` FROM `t_adoption_orphanage_address` as `aoa` left join `jos_cos_province` as `cp` on (cp.id=aoa.provinceid) group by `aoa`.`provinceid`,`aoa`.`id`";
	$ress  = Yii::app()->db->createCommand($sql)->queryAll();
	$arr_adoption_info=array();
	foreach($ress as $res){
		$arr_adoption_info[$res['cp_name']][] = array('aid'=>$res['aoa_id'],'province_name'=>$res['orphanage_name']);
	}
	$this->render('adoption_list',array('arr_adoption_info'=>$arr_adoption_info));
  }
  public function actionNoSearchResults(){
	// form
	$model = new Message;
	if(isset($_POST['Message'])){
		CActiveForm::validate($model); // form validate;
		if(isset($_POST['Message'])){
			  $model->attributes=$_POST['Message'];
			  $model->ip=SiteUtils::getClientIp();
			  $model->referer_url=Yii::app()->request->urlReferrer;
			  $model->dateline = time();
			  if($model->save()){
				$this->redirect('/travel/success');
				Yii::app()->end();
			  }
			}
	   }
	$this->render('adoption_no_search_results',array('message' => $model));
  }
 // adoption grooup tour;
 function actionAdoptionGroupTour(){

	 $title = date('Y').' Summer Promotion: China Heritage & Homeland Tours';
	 $keywords = '2016 china homeland tours, china heritage tours 2016';
	 $des ='Based in China, we are offering cheap China heritage tours during 2016 summer vacation. You join groups and customize a private homeland tour to China from our service.';

	 Seo::_seo($this,$title,$keywords,$des);
 
	$this->render('adoption_group_tour');
 }
 // 资讯列表
 public function actionResources(){
	 
	 $t='Resource for China Homeland & Heritage Tours';
	 $k='';
	 $d='What adoptive families need to know before making a return trip to China ? Try to find the answer from the useful and interesting articles.';

	 Seo::_seo($this,$t,$k,$d);

			$sql="select * from `t_adoption_content` where `cat_id`<>0 order by `dateline` desc";

			$criteria=new CDbCriteria();
			$result = Yii::app()->db->createCommand($sql)->query();
			$pages=new CPagination($result->rowCount);
			$pages->pageSize=8; 
			$pages->applyLimit($criteria);
			$result=Yii::app()->db->createCommand($sql." LIMIT :offset,:limit"); 
			$result->bindValue(':offset', $pages->currentPage*$pages->pageSize); 
			$result->bindValue(':limit', $pages->pageSize); 
			$posts=$result->query();

	$this->render('resources',array(
			'posts'=>$posts,
			'pages'=>$pages
	));
 }

// 资讯详细;
public function actionAdoptionResourcesDetail(){
		//var_dump($_GET['ar_id']);
		$ar_id = (int)$_GET['resource_id'];
		$sql="select * from `t_adoption_content` where `id`={$ar_id}";
		$res = Yii::app()->db->createCommand($sql)->queryRow();
		// seo;
		$title = $res['title'];
		$k='chinese heritage tour reviews，china homeland tour review，reviews for china homeland tours，china  heritage tour reviews';
		$des=substr(strip_tags($res['description']),0,128).'...';
		Seo::_seo($this,$title,$k,$des);
		$this->render('resources_detail',array('res'=>$res));
	}
}