<?php

class ChinaToursController extends Controller
{

  public function actions() {
    return array(
       'captcha'=> array(  
          'class'=>'CaptchaAction',
    ));
  }

  public function actionIndex()
  {
      $this->render('index', array(
         'message' => Message::newMessage()
      ));
  }

  public function actionAdvanceSearch(){
    $this->render('advanceSearch');
  }

  public function actionSearchList(){
    $orderModel = Order::model()->newOrder();
    $tours = ToursPackage::model()->searchTours();

    $recommend_tours = array();
    if($tours->totalItemCount == 0){
      $search_condition = Yii::app()->user->getState('advance_search_condition');

      foreach($search_condition as $k=>$v){
        if(strpos($v, 'highlight') != false){
           unset($search_condition[$k]);
        }elseif(strpos($v, 'theme') != false){
           unset($search_condition[$k]);
        }elseif(strpos($v, 'days') != false){
           unset($search_condition[$k]);
        }elseif(strpos($v, 'price') != false){
           unset($search_condition[$k]);
        }
        /*
        elseif(strpos($v, 'city_num')){
          $maybe_use_condition = $search_condition[$k];
          unset($search_condition[$k]);
        }
        */
      }
      if($search_condition){
        $where_sql = ' WHERE ' . implode(' AND ', $search_condition);
        $sql = "select id,name,tour_intro,route,price_serialize,price,days,ufile,filedir,pic,pic_big from jos_cos_tours_package $where_sql order by price asc limit 4";
        $recommend_tours = Yii::app()->db->createCommand($sql)->queryAll();
        if(empty($recommend_tours)) {
          foreach($search_condition as $k=>$v){
            if(strpos($v, 'city_num')) unset($search_condition[$k]);
          }
        }
        $where_sql = ' WHERE ' . implode(' AND ', $search_condition);
        $sql = "select id,name,tour_intro,route,price_serialize,price,days,ufile,filedir,pic,pic_big from jos_cos_tours_package $where_sql order by price asc limit 4";
        $recommend_tours = Yii::app()->db->createCommand($sql)->queryAll();
      }
    }
    
    $this->render('searchList', array(
      'dataProvider' => $tours,
      'model' => $orderModel,
      'recommend_tours' => $recommend_tours,
    ));
  }


  public function actionTop10Tours(){
      $top10Tours = ToursPackage::getThemeTours(1);
      foreach($top10Tours as $v){
        $touridsArr[] = $v['id'];
      }
      $tourids = implode(',', $touridsArr);
      $sql = "select packageid,hotel_name from jos_cos_tours_des where packageid in($tourids)";
      $toursDes = Yii::app()->db->createCommand($sql)->queryAll();
      foreach($toursDes as $v){
        $toursDesHotels[$v['packageid']][] = trim($v['hotel_name']);
      }

      $this->render('top10tours',
        array(
          'top10Tours' => $top10Tours,
          'toursDesHotels' => $toursDesHotels,
        )
      );
  }


  public function actionClassicTours(){
      $toursList = ToursPackage::getThemeTours(21);
      foreach($toursList as $v){
        $touridsArr[] = $v['id'];
      }
      $tourids = implode(',', $touridsArr);
      
      $sql = "select packageid,hotel_name from jos_cos_tours_des where packageid in($tourids)";
      $toursDes = Yii::app()->db->createCommand($sql)->queryAll();
      foreach($toursDes as $v){
        $toursDesHotels[$v['packageid']][] = trim($v['hotel_name']);
      }
  	  $this->render('classicTours',
    	array(
            'toursList' => $toursList,
            'toursDesHotels' => $toursDesHotels,
          )	
    	);
  }

  public function actionFamilyTours()
  {
      $toursList = ToursPackage::getThemeTours(22);
      foreach($toursList as $v){
        $touridsArr[] = $v['id'];
      }
      $tourids = implode(',', $touridsArr);
      
      $sql = "select packageid,hotel_name from jos_cos_tours_des where packageid in($tourids)";
      $toursDes = Yii::app()->db->createCommand($sql)->queryAll();
      foreach($toursDes as $v){
        $toursDesHotels[$v['packageid']][] = trim($v['hotel_name']);
      }
      $this->render('familyTours', array(
          'toursList' => $toursList,
          'toursDesHotels' => $toursDesHotels,
      ));
  }

  public function actionYangtzeRiverTours()
  {
      $recommend_list = Cruise::getMonthRecommendCruises();
      $cruises = Cruise::getCruises();
      $this->render('yangtzeRiverTours', array(
        'recommend_cruise' => $recommend_list,
        'cruises' => $cruises,
      ));
  }
  
  public function actionTrainTravel(){
	  $top10Tours = ToursPackage::getThemeTours(6);
      foreach($top10Tours as $v){
        $touridsArr[] = $v['id'];
      }
      $tourids = implode(',', $touridsArr);
      $sql = "select packageid,hotel_name from jos_cos_tours_des where packageid in($tourids)";
      $toursDes = Yii::app()->db->createCommand($sql)->queryAll();
      foreach($toursDes as $v){
        $toursDesHotels[$v['packageid']][] = trim($v['hotel_name']);
      }

      $this->render('trainTrave',
        array(
          'top10Tours' => $top10Tours,
          'toursDesHotels' => $toursDesHotels,
        )
      );
  }

  public function actionStudentTours_test1()
	{
      $top10Tours = ToursPackage::getThemeTours(4);
      foreach($top10Tours as $v){
        $touridsArr[] = $v['id'];
      }
      $tourids = implode(',', $touridsArr);
      $sql = "select packageid,hotel_name from jos_cos_tours_des where packageid in($tourids)";
      $toursDes = Yii::app()->db->createCommand($sql)->queryAll();
      foreach($toursDes as $v){
        $toursDesHotels[$v['packageid']][] = trim($v['hotel_name']);
      }

      $this->render('studentTours',
        array(
          'top10Tours' => $top10Tours,
          'toursDesHotels' => $toursDesHotels,
        )
      );

	}

  public function actionStudentTours()
	{
    	$this->render('studentToursTest1',array());
	}

  public function actionJewishTours()
	{
    	$this->render('JewishTours',array());
	}

  public function actionJewishCentersinChina()
	{
    	$this->render('JewishCentersinChina',array());
	}
  public function actionJewishToursWhyUs()
	{
    	$this->render('JewishToursWhyUs',array());
	}
  public function actionChinaSeniorTours()
	{
    	$this->render('ChinaSeniorTours',array());
	}
  public function actionChinaSeniorToursTravelTips()
	{
    	$this->render('ChinaSeniorToursTravelTips',array());
	}
  public function actionChinaSeniorToursWhyUs()
	{
    	$this->render('ChinaSeniorToursWhyUs',array());
	}

  public function actionSuccessfulCases(){
	$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
	$perPage = 5;
    $page = ($page-1)*$perPage;
    $limit = "limit {$page},{$perPage}";
  	$sql = "select a.*,b.name as tour_name from {{reviews}} as a left join jos_cos_tours_package as b on a.tour_id=b.id where a.is_student=1 and a.published=1 order by a.dateline desc {$limit}  ";
    $data =  Yii::app()->db->createCommand($sql)->queryAll();
    $sql = "select count(*) as c from {{reviews}} as a where a.is_student=1 and a.published=1";
    $items_count = Yii::app()->db->createCommand($sql)->queryRow();
    $items_count = $items_count['c'];
    $pages = new CPagination($items_count);
    $pages->setPageSize($perPage);
    $sql = "select id,file_name from {{ImgVideo}} where status=0 and img_video=0";
    $img_list =  Yii::app()->db->createCommand($sql)->queryAll();
    $sql = "select id,file_name,http_url,duration from {{ImgVideo}} where status=0 and img_video=1";
    $video_list =  Yii::app()->db->createCommand($sql)->queryAll();
    $this->render('SuccessfulCases',array(
    	'data'=>$data,
        'item_count'=>$items_count,
        'page_size'=>$perPage,
        'pages'=>$pages,
        'img_list'=>$img_list,
        'video_list'=>$video_list));
  }
  
  public function actionCulturalExchange(){
    $this->render('CulturalExchange',array());
  }
  public function actioncooperation(){
    $this->render('cooperation',array());
  }
  public function actionWhyUs(){
    $this->render('WhyUs',array());
  }
  public function actionTibetTours()
	{
      $top10Tours = ToursPackage::getThemeTours(9);
      foreach($top10Tours as $v){
        $touridsArr[] = $v['id'];
      }
      $tourids = implode(',', $touridsArr);
      $sql = "select packageid,hotel_name from jos_cos_tours_des where packageid in($tourids)";
      $toursDes = Yii::app()->db->createCommand($sql)->queryAll();
      foreach($toursDes as $v){
        $toursDesHotels[$v['packageid']][] = trim($v['hotel_name']);
      }

      $this->render('tibetTours',
        array(
          'top10Tours' => $top10Tours,
          'toursDesHotels' => $toursDesHotels,
        )
      );

	}
  
	//Quick Customize Tours
	public function actionQuickCustomizeTours(){
  	  $cityName = $_GET['city'];
  	  if($cityName){
  	    $cityInfo = JosCosCity::model()->findByAttributes(array('name'=>$cityName));
  	    if(empty($cityInfo)){
  	      throw new CHttpException(404, 'Page not found');
  	    }
  	  }
  	  $order = Order::model()->newOrder();
  	  $this->render('quickCustomizeTours', array(
  	      'model' => $order,
  	      'cityInfo'=>$cityInfo,
  	   ));
	}

  public function action72HourVisaFreeTours(){
      $tours = ToursPackage::get72HoursVisaFreeTours();;
      foreach($tours as $v){
        $touridsArr[] = $v['id'];
      }
      $tourids = implode(',', $touridsArr);
      $sql = "select packageid,hotel_name from jos_cos_tours_des where packageid in($tourids)";
      $toursDes = Yii::app()->db->createCommand($sql)->queryAll();
      foreach($toursDes as $v){
        $toursDesHotels[$v['packageid']][] = trim($v['hotel_name']);
      }

      $vf_tours = array();
      foreach($tours as $v){
        $vf_tours[$v['category_parentid']][] = $v;
      }
 
      $this->render('72HourVisaFreeTours',
        array(
          'vf_tours' => $vf_tours,
          'toursDesHotels' => $toursDesHotels,
        )
      );
  }

  //Australia Tours
  public function actionAustraliaTours(){
    $this->render('australiaTours'); 
  }
	
  //South Africa Tours
  public function actionSouthAfrica(){
    $this->render('southAfrica');
  }

  //China Winter Tours
  public function actionWinterTours(){
    $this->render('harbinWinterTours');
  }

  public function actionWinterToursGuide(){
    $title = $_GET['title'];
    switch($title){
      case 'china-ski-resort':
      $this->render('chinaSkiResort');
      break;
      case 'warm-destinations':
      $this->render('warmDestinations');
      break;
      case 'famous-mountains':
      $this->render('famousMountains');
      break;
      case 'festivals-in-winter':
      $this->render('festivalsInwinter');
      break;
      case 'hot-springs':
      $this->render('hotSprings');
      break;
      default:
      exit;
      break;
    }
  }

	public function actionCheapChinaTours()
	{
  		$this->render('cheapChinaTours',array(
			 'message' => Message::newMessage()
  		));
	}
	
	public function actionChinaTibetTours()
	{
  		$this->render('chinaTibetTours',array(
			 'message' => Message::newMessage()
  		));
	}
	public function actionCustomChinaTours()
	{
  		$this->render('customChinaTours',array(
			 'message' => Message::newMessage()
  		));
	}
  public function actionChinaTours2013()
	{
  		$this->render('chinaTours2013',array(
  		));
	}

  public function actionPartners(){
    $model = CooperationPartners::model()->newPartner();
    $this->render('partner',
      array(
        'model' => $model
      )
    );
  }


  public function actionFujianTulouTours(){
    //$tours = ToursPackage::model()->findAllByAttributes(array('category_parentid'=>757));
    $tours=ToursPackage::model()->findAll(array(
      'select'=>'id,name,package_code,recommand_reason',
      'condition'=>'category_parentid=757',
      'order' => 'id asc'
    ));
    $this->render('fujianTulouTours', array(
      'tours'=>$tours,
      'message' => Message::newMessage(),
    ));
  }


  public function actionAir(){
    $this->render("air");
  }

  function city_list($start,$end){
    $city_list=Yii::app()->params['city_list'];
    $city_arr=array();
    foreach ($city_list as $k=>$v){
      if($v{0}>=$start && $v{0}<=$end) $city_arr[]=$v;
    }
    sort($city_arr);
    $li = '';
    foreach ($city_arr as $k=>$v){
      $li .= '<li><input name="sc[]" type="checkbox" value="'.$v.'" id="'.$v."_".$k.'" onclick="checkd()" /><label for="'.$v."_".$k.'">'.$v.'</label></li>';
    }
    return $li;
  }

}
