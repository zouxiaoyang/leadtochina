<?php

class CityToursController extends Controller
{

  public $query = array();
  public $day;
  public $des;
  public $tour_type;
  public $price;
  public $group;
  public $transportation;
  public $theme;
  public $themes;
  public $order;
  public $cat1;
  public $condition = array();
  public $isSimilarResult = false;
  public $orderModel;

  public function actions() {
    return array(
        'captcha'=> array(
            'class'=>'CaptchaAction',
        ));
  }

  public function actionIndex()
  {
	 
    $most_popular_city_ids = array(77,109,121,86,88,92,100,94,80);
    $most_popular_cities_desc = array(
        77 => 'With its long history and brilliant culture, Beijing is the bes... ',
        109 => 'Shanghai is an amazing city which combine the traditional and m...',
        121 => "Xian is the first of China's Four Great Ancient Capitals. Xian ... ",
        86 => 'An old Chinese saying goes: "Guilin\'s landscape is second ... ',
        88 => 'There is an old Chinese saying that: "There is paradise in the ...',
        92 => 'Hong Kong is a shopping pradise and also to be the most popular.. ',
        100 => 'Lhasa is the capital of the Tibet Autonomous Region. With its u...',
        94 => 'Huangshan tours is highly recommended for China city ... ',
        80 => 'Chengdu, the capital city of Sichuan Province, is the home ... ',
    );

    $most_popular_cities_obj = Categories::model()->findAll(array(
        'select' => 'id,title',
        'condition' => "id in(".implode(',', $most_popular_city_ids).")"
    ));
    foreach($most_popular_cities_obj as $v){
      $most_popular_cities[$v->id] = $v;
    }
    $most_popular_cities = ArrayUtils::fix_sort($most_popular_cities,$most_popular_city_ids);


    $this->render('index',array(
        'message' => Message::newMessage(),
        'most_popular_cities' => $most_popular_cities,
        'most_popular_cities_desc' => $most_popular_cities_desc,
    ));
  }

  //城市首页
  public function actionList(){
    $title = $_GET['title'];
    $cityIntro=Categories::model()->findByAttributes(array('title_slug'=>$title));

    if(!$cityIntro){
      throw new CHttpException(404, 'Page not found');
    }
    $catId = $cityIntro->id;

    if($catId == 77){ 		//beijing tours
	    $this->layout = 'beijingTour';
      $this->setPageHeader();
      $messageModel=Message::newMessage();
      $toursList=BeijingPackage::getBeijingIndexPackages();
      $testimonial=Yii::app()->db->createCommand("select a.id,a.name as aname,a.nationnality,a.packageid,a.tour_time,a.image,a.pic_alt,b.name as bname from jos_cos_testimonisal a left join jos_cos_tours_package b on a.packageid=b.id where a.recomment=1 order by id desc")->queryAll();
    
      $this->layout = 'main';
      $layout = 'newBeijingTour';
      
      $this->render($layout,array(
          'title' => $title,
          'messageModel'=>$messageModel,
          'toursList'=>$toursList,
          'testimonial'=>$testimonial,
      ));
    }else{
      $layout = 'list';
      $cityArr = array(
          109 => 'shanghai',
          //121 => 'xian',
          86 => 'guilin',
          94 => 'huangshan',
          88 => 'hangzhou',
          112 => 'suzhou',
          100 => 'lhasa',
          80 => 'chengdu',
          92 => 'hongkong',
          85 => 'guangzhou',
          743 => 'hefei',

      );
      $cityArr2 = array(
         94 => 'huangshan',
         121 => 'xian',
      );

      $cityArr3 = array(
        128 => 'zhangjiajie',
      );

      if($cityArr2[$catId]){
        $layout = $cityArr2[$catId].'Index';
        $cityInfo = JosCosCity::model()->findByAttributes(array('name'=>$cityArr[$catId]));
        $chinaTripQuestion = CityQuestion::pageQuestionByType(1, $cityArr2[$catId]);
        $commonQuestion = CityQuestion::pageQuestionByType(2, $cityArr2[$catId]);
        $cityPackageInfo=Categories::getCityPackageInfo($catId);
      }else if($cityArr[$catId]){
        $layout = 'cityTour';
        $cityInfo = JosCosCity::model()->findByAttributes(array('name'=>$cityArr[$catId]));
        $chinaTripQuestion = CityQuestion::pageQuestionByType(1, $cityArr[$catId]);
        $commonQuestion = CityQuestion::pageQuestionByType(2, $cityArr[$catId]);
        $cityPackageInfo=Categories::getCityPackageInfo($catId);
      }elseif($cityArr3[$catId]){
        $layout = 'cityTour3';
        $categories = Categories::model()->findAll(array('condition'=>"id = '$catId' OR parent_id='$catId'"));
        foreach($categories as $category){
          $categorieid_str[] = $category->id;
        }
        $cityInfo = JosCosCity::model()->findByAttributes(array('name'=>$cityIntro->city));
        $tours = ToursPackage::model()->findAll(array(
          'select' => 'id,name,days,recommand_reason,route,pic',
          'condition'=>"categorieid_str in(".implode(',',  $categorieid_str).")",
          'order' => 'days asc',
        ));

        $chinaTripQuestion = CityQuestion::pageQuestionByType(1, $cityArr3[$catId]);
        $commonQuestion = CityQuestion::pageQuestionByType(2, $cityArr3[$catId]);
        $cityPackageInfo=Categories::getCityPackageInfo($catId);
      }else{
        $layout = 'cityTourOrigin';
        $categories = Categories::model()->findAll(array('condition'=>"id = '$catId' OR parent_id='$catId'"));
        foreach($categories as $category){
          $categorieid_str[] = $category->id;
        }
        $cityInfo = JosCosCity::model()->findByAttributes(array('name'=>$cityIntro->city));
        $tours = ToursPackage::model()->findAll(array('condition'=>"categorieid_str in(".implode(',',  $categorieid_str).")"));
      }

      
      $this->setPageTitle($cityIntro->seo_title);
      Yii::app()->clientScript->registerMetaTag('keywords',$cityIntro->seo_key);
      Yii::app()->clientScript->registerMetaTag('description',$cityIntro->seo_description);
      $this->render($layout, array(
          'cityIntro'=>$cityIntro,
          'cityInfo' => $cityInfo,
          'cityPackageInfo'=>$cityPackageInfo,
          'categories' => $categories,
          'tours' => $tours,
          'chinaTripQuestion' => $chinaTripQuestion,
          'commonQuestion' => $commonQuestion,
      ));
    }
  }

  //航班表
  public function actionFlightTimetable($title){
      switch($title){
        case 'huangshan-flight-timetable':
          $layout = "timetable/huangshanFlightTimetable";
        break;
        case 'huangshan-from-shanghai':
          $layout = "timetable/shanghaiToHuangshanFlight"; 
        break;
        case 'huangshan-from-beijing':
		  $this->setPageHeader1();
          $layout = "timetable/beijingToHuangshanFlight";
        break;
        case 'huangshan-from-hangzhou':
          $layout = "timetable/hangzhouToHuangshanFlight";
        break;
        case 'huangshan-from-hefei':
          $layout = "timetable/hefeiToHuangshanFlight"; 
        break;

      }
     
     $this->render($layout);
  }

  public function actionAirView(){
    $this->render('airView',array(

    ));
  }

  public function actionBest(){
    include_once(SITEROOT.'/config/beijingtours.php');
    $id = Yii::app()->getRequest()->getParam('id');
    switch($id){
      case 1:
        $is_great_wall = true;
        $one_category_ids = array_keys($one_category['great_wall_tour']);
        $one_category_arr = $one_category['great_wall_tour'];
        $two_category_arr = array();
        break;
      case 2:
        $is_beijing_xian = true;
        $one_category_ids = array_keys($one_category['beijing_xian_tour']);
        $one_category_arr = $one_category['beijing_xian_tour'];
        $two_category_arr = array();
        break;
      case 5:
        $is_beijing_shanghai = true;
        $one_category_ids = array_keys($one_category['beijing_shanghai_tour']);
        $one_category_arr = $one_category['beijing_shanghai_tour'];
        $two_category_arr = $two_category['beijing_shanghai_tour'];
        break;
      case 12:
        $is_beijing_xian_shanghai = true;
        $one_category_ids = array_keys($one_category['beijing_xian_shanghai_tour']);
        $one_category_arr = $one_category['beijing_xian_shanghai_tour'];
        $two_category_arr = $two_category['beijing_xian_shanghai_tour'];
        break;
      default:
        $one_category_ids = array();
        $one_category_arr = array();
        break;
    }

    $sql="SELECT id,name,route,top,recommend,price,price_serialize,days,destination_addr,hot_tour,tour_type,one_category,two_category,recommend FROM jos_cos_tours_package WHERE category_parentid='77' AND FIND_IN_SET($id, destination_addr) order by days";
    $tours_list = Yii::app()->db->createCommand($sql)->queryAll();
    $recommend_tours = array();
    foreach($tours_list as $v) {
      $temp_one_category_ids = explode(',', $v['one_category']);
      foreach($one_category_ids as $catid){
        if(in_array($catid, $temp_one_category_ids)){
          $tour_list[$catid][] =  $v;
        }
      }
    }

    $city_tours = array();
    if($id == 2){
      $single_city_sql = " and category_parentid=121";
    }

    if($id == 5){
      $single_city_sql = " and category_parentid=109";
    }

    if($single_city_sql){
      $sql="SELECT id,name FROM jos_cos_tours_package WHERE city_recommend=1 $single_city_sql";
      $city_tours = Yii::app()->db->createCommand($sql)->queryAll();
    }
    $message=Message::newMessage();
    $this->setPageHeader();
    $this->render('best',array(
        'id'=>$id,
        'is_great_wall'=>$is_great_wall,
        'is_beijing_xian'=>$is_beijing_xian,
        'is_beijing_shanghai'=>$is_beijing_shanghai,
        'is_beijing_xian_shanghai'=>$is_beijing_xian_shanghai,
        'destination'=>$destination,
        'destination_count'=>$destination_count,
        'one_category_ids'=>$one_category_ids,
        'one_category_desc'=>$one_category_desc,
        'one_category_arr'=>$one_category_arr,
        'two_category_arr'=>$two_category_arr,
        'city_tours'=>$city_tours,
        'tour_list'=>$tour_list,
        'message'=>$message,
    ));
  }

  public function actionAjaxLoadTours(){
    $destinationId=$_GET['destination_id'];
    $ajaxLoadToursList=ToursPackage::getAjaxLoadToursList($destinationId,'77');
    $this->render('_ajaxLoadTours',array(
        'destination_id'=>$destinationId,
        'ajaxLoadToursList'=>$ajaxLoadToursList,
    ));
  }

  public function actionBeijingTourSearch(){
    $this->order();

    $this->layout = 'beijingTour';
    $sql_condition = array();
    $days = $_GET['days'];
    if($days){
      $this->query['days'] = $days;
      switch($days){
        case 'Half Day':
          $sql_condition[] = "is_half_day=1";
          break;
        case '1 Day':
          $sql_condition[] = "days=1";
          break;
        case '2 Days':
          $sql_condition[] = "days=2";
          break;
        case '3 Days':
          $sql_condition[] = "days=3";
          break;
        case '4 Days':
          $sql_condition[] = "days=4";
          break;
        case '5 Days':
          $sql_condition[] = "days=5";
          break;
        case '4-6 Days':
          $sql_condition[] = "days>=4 and days<=6";
          break;
        case '6-7 Days':
          $sql_condition[] = "days>=6 and days<=7";
          break;
        case '8-10 Days':
          $sql_condition[] = "days>=8 and days<=10";
          break;
        case '11-15 Days':
          $sql_condition[] = "days>=11 and days<=15";
          break;
        case 'Over 15 Days':
          $sql_condition[] = "days>=16";
          break;
        default:
          break;
      }
    }

    $city = $_GET['city'];
    if($city){
      $this->query['city'] = $city;
      $query['city'] = $city;
      $city_arr = explode(',', $city);
      foreach($city_arr as $v){
        if($v=="Dali"){
          $sql_condition[] =" (route like '%Dali%' AND route not like '%Dalian%' AND route not like '%Badaling%')";
        }elseif($v=="Tibet(Lhasa)"){
          $sql_condition[] =" (route like '%Lhasa%' or route like '%Tibet%') ";
        }elseif($v=='Silk Road'){
          $sql_condition[] =" (route like '%Turpan%' or route like '%Urumqi%') ";
        }else{
          $sql_condition[] = " route like '%$v%'";
        }
      }
      $sql_condition[] = " route like '%beijing%'";
    }else{
      $sql_condition[] = " route ='beijing' ";
    }

    $subtags_arr = $subtagid_arr = array();
    $subtags = $_GET['themetags'];
    if($subtags){
      $this->query['subtags'] = $subtags;
      $subtagid_arr = explode(',', $subtags);
      foreach($subtagid_arr as $v){
        $sql_condition[] = "find_in_set($v, tour_subtag_ids)";
      }
      $subtagids = implode(',', $subtagid_arr);
      $sql = "SELECT id,name FROM jos_cos_tours_package_tag WHERE id in($subtagids)";
      $subtagsArr = Yii::app()->db->createCommand($sql)->queryAll();
      foreach($subtagsArr as $v){
        $subtags_arr[] = $v['name'];
      }
    }

    $where_sql = '';
    if($sql_condition) $where_sql = implode(' AND ', $sql_condition);

    $criteria=new CDbCriteria(array(
        'select' => array('id,package_type,categorieid_str,name,route,price_serialize,price,days,ufile,filedir,pic,tour_subtag_ids,attractions,categorie_name_str,reviews,tour_intro'),
        'condition' => $where_sql,
        'order'=>$this->getOrderSql(),
    ));
    $dataProvider = new CActiveDataProvider('ToursPackage', array(
        'pagination'=>array(
            'pageSize'=>10,
            'pageVar'=>'p',
        ),
        'criteria'=>$criteria,
    ));

    $this->render('beijingTourSearch', array(
        'messageModel'=>Message::newMessage(),
        'model' => $this->orderModel,
        'dataProvider' => $dataProvider,
        'days' => $days,
        'city' => $city,
        'subtags' => implode(',', $subtags_arr),
        'subtagid_arr' => $subtagid_arr,
    ));
  }

  public function actionSearch()
  {
    $this->order();
    $this->layout = 'beijingTour';
    $title = $_GET['title'];
    $cityIntro=Categories::model()->findByAttributes(array('title_slug'=>$title));
    if(!$cityIntro){
      throw new CHttpException(404, 'Page not found');
    }
    $this->condition = $this->getSqlCondition();
    $themes = ToursPackageTag::getThemeTag();
    $message=Message::newMessage();

    $beijingRecommendTours = ToursPackage::beijingRecommendTours();
    $this->setPageHeader();
    if($_GET['test']){
      $layout = 'newSearch_2';
    }else{
      $this->layout = 'main';
      $layout = 'newSearch';
    }
    $this->render($layout, array(
        'title' => $title,
        'themes'=>$themes,
        'messageModel'=>$message,
        'dataProvider' => $this->dataProvider(),
        'model' => $this->orderModel,
        'beijingRecommendTours' =>$beijingRecommendTours
    ));
    exit;


    $this->render('search',
        array(
            'title' => $title,
            'themes'=>$themes,
            'dataProvider' => $this->dataProvider(),
        )
    );
  }

 public function actionBeijingSideTrips(){
    $this->render('beijingSideTrips');
  }

  public function actionDayInBeijingTours(){
    $this->render('daysInBeijingTours');
  }
  
  private function dataProvider(){
    $where_sql = implode(' AND ', $this->condition);
    /*
     $sql = "select count(1) from jos_cos_tours_package where $where_sql";
    $count = ToursPackage::model()->countBySql($sql);
    if($count == 0){
    array_pop($this->condition);
    $where_sql = implode(' AND ', $this->condition);
    $this->isSimilarResult = true;
    }
    */

    $criteria=new CDbCriteria(array(
        'select' => array('id,package_type,categorieid_str,name,route,price_serialize,price,days,ufile,filedir,pic,tour_subtag_ids,attractions,categorie_name_str,reviews,tour_intro'),
        'condition' => $where_sql,
        'order'=>$this->getOrderSql(),
    ));
    $dataProvider = new CActiveDataProvider('ToursPackage', array(
        'pagination'=>array(
            'pageSize'=>10,
            'pageVar'=>'p',
        ),
        'criteria'=>$criteria,
    ));

    return $dataProvider;
  }

  private function getSqlCondition()
  {
    $condition[] = "category_parentid=77";
    $day = $_GET['days'];
    $this->day = (int)$day;
    if($day == 'Half Day'){
      $this->day = 99;
    }

    if($this->day){
      $this->query['days'] = $day;
      switch ($this->day) {
        case 1:
          $condition[] = " days=1";
          break;
        case 2:
          $condition[] = " days=2";
          break;
        case 3:
          $condition[] = " days=3";
          break;
        case 4:
          $condition[] = " days=4";
          break;
        case 5:
          $condition[] = " days=5";
          break;
        case 6:
          $condition[] = " days>=6 and days<=7";
          break;
        case 8:
          $condition[] = " days>=8 and days<=10";
          break;
        case 99:
          $condition[] = " is_half_day =1";
          break;
        default:
          break;
      }
    }

    $price = $_GET['price'];
    $this->price = $price;
    if($price){
      $this->query['price'] = $price;
      switch($price){
        case 'Below $50':
          $condition[] = " price <= 50";
          break;
        case '$51-$100':
          $condition[] = " price >=51 and price<=100";
          break;
        case '$101-$200':
          $condition[] = " price >=101 and price<=200";
          break;
        case '$201-$500':
          $condition[] = " price>=201 and price<=500";
          break;
        case '$501-$1000':
          $condition[] = " price>=501 and price<=1000";
          break;
        case '$201-$400':
          $condition[] = " price>=201 and price<=400";
          break;
        case '$401-$600':
          $condition[] = " price>=401 and price<=600";
          break;
        case '$601-$900':
          $condition[] = " price>=601 and price<=900";
          break;
        case '$901-$1500':
          $condition[] = " price>=901 and price<=1500";
          break;
        case 'Above $601':
          $condition[] = " price >=601";
          break;
        case 'Above $1001':
          $condition[] = " price>=1001";
          break;
        case '$1-$899':
          $condition[]= " price<=899";
          break;
        case '$900-$1299':
          $condition[]= " price>899 and price<=1299";
          break;
        case '$1300-$1699':
          $condition[]= " price>=1300 and price<=1699";
          break;
        case '$1700-$1999':
          $condition[]= " price>=1700 and price<=1999";
          break;
        case 'Over $2000':
          $condition[]= " price>=2000";
          break;
        case '$300-$500':
          $condition[] = " price>=300 and price<=500";
          break;
        case '$501-$800':
          $condition[] = " price>=501 and price<=800";
          break;
        case '$801-$1500':
          $condition[] = " price>=801";
          break;
        default:
          break;
      }
    }


    $des = $_GET['des'];
    $this->des = (int)$des;
    if($this->des){
      $this->query['des'] = $des;
      if($this->des == 13){ //beijing side tour
        $condition[] =" (FIND_IN_SET('4',destination_addr) OR FIND_IN_SET('7',destination_addr) OR FIND_IN_SET('9',destination_addr) OR FIND_IN_SET('10',destination_addr) OR destination_addr=0) AND (a.route!='Beijing')";
      }else{
        $condition[] = " find_in_set('{$this->des}', destination_addr)";
      }
    }

    $group = $_GET['group'];
    $this->group = (int)$group;
    if($this->group){
      $this->query['group'] = $group;
      $condition[] = " find_in_set({$this->group}, by_group)";
    }

    $transportation = $_GET['transportation'];
    $this->transportation = $transportation;
    if($this->transportation){
      $this->query['transportation'] = $transportation;
      switch($transportation){
        case 'Train':
          $condition[] = " find_in_set(7, vehicle_type)";
          break;
        case 'Flight':
          $condition[] = " find_in_set(3, vehicle_type)";
          break;
        default:
          break;
      }
    }

    $tour_type = $_GET['tour_type'];
    $this->tour_type = (int)$tour_type;
    if($this->tour_type){
      $this->query['tour_type']=$tour_type;
      $condition[] = " tour_type=".$this->tour_type;
    }

    $theme = $_GET['theme'];
    $this->theme = (int)$theme;
    if($this->theme){
      $this->query['theme'] = $theme;
      $condition[] = " find_in_set({$this->theme}, tour_tagids)";
    }

    $cat1 = $_GET['cat1'];
    $this->cat1 = (int)$cat1;
    if($this->cat1){
      $extra_association_tours = array(
        18 => '738,737',
        19 => ' 713,739,53',
      );
      $or_sql = '';
      if(!empty($extra_association_tours[$this->cat1])){
          $or_sql =  " or id in(".$extra_association_tours[$this->cat1].")";
      }

      $this->query['cat1'] = $cat1;
      $condition[] = " find_in_set({$this->cat1}, one_category)" . $or_sql;
    }

    //$this->condition = $condition;
    //$where_sql = implode(' AND ', $condition);

    return $condition;
    //return $where_sql;
  }


  private function getOrderSql()
  {
    $orders = $_GET['order'];
    $this->order = $orders;
    switch ($orders) {
      case 'price_up':
        $order_sql = " price asc";
        $orders = "price_down";
        break;
      case 'price_down':
        $order_sql = " price desc";
        $orders = "price_up";
        break;
      case 'day_up':
        $order_sql = " days asc";
        $orders = "day_down";
        break;
      case 'day_down':
        $order_sql = " days desc";
        $orders = "day_up";
        break;
      case 'reviews_up':
        $order_sql = " reviews asc";
        $orders = "reviews_down";
        break;
      case 'reviews_down':
        $order_sql = " reviews desc";
        $orders = "reviews_up";
        break;
      default:
        $order_sql = " sort desc, price asc";
        //$order_sql = " price asc";
        break;
    }
    return $order_sql;
  }

  protected function setPageHeader(){
    $this->setPageTitle("Beijing Tours, Beijing Travel, Beijing Tour Packages");
    Yii::app()->clientScript->registerMetaTag('keywords',"beijing tours, beijing travel, beijing tour packages, china beijing travel, beijing travel agency");
    Yii::app()->clientScript->registerMetaTag('description',"Beijing Travel Agency offering Beijing tours, Beijing private tour, Beijing coach tour, and China Beiijng travel with honest price. You may also tailor-made beijing tours freely.");
  }

  private function order()
  {
    $this->orderModel = $model =new Order;

    if(isset($_POST['Order']))
    {
      if($_POST['Order']['full_name']) {
        $_POST['Order']['full_name'] = $_POST['Order']['gender'].$_POST['Order']['full_name'];
      }
      $_POST['Order']['url_referer'] = Yii::app()->request->urlReferrer;
      $_POST['Order']['submit_source'] = $_SERVER['HTTP_HOST'];
      $_POST['Order']['dateline'] = time();

      if($_POST['entry_date']){
        $_POST['Order']['entry_date'] = $_POST['entry_date'];
      }

      $other_message='';
      if($_POST['Order']['total_price']){
        $other_message .= "<b>Num of Rooms:</b>".$_POST['Order']['total_price']."</br>";
      }
      if($_POST['Order']['final_price']){
        $other_message .= "<b>HOtel Class:</b>".$_POST['Order']['final_price']."</br>";
      }
      if($_POST['hotel']){
        $other_message .= "<b>Hotel Choice:</b>".$_POST['hotel']."</br>";
      }
      if($_POST['dietetic']){
        $other_message .= "<b>Dietetic Requirement:</b>".$_POST['dietetic']."</br>";
      }
      if($_POST['language']){
        $other_message .= "<b>Guide Language:</b>".$_POST['language']."</br>";
      }

      if($_POST['Order']['other_message']){
        $other_message .= "<b>OTHER MESSAGE :</b>".$_POST['Order']['other_message']."</br>";
      }
      $_POST['Order']['other_travelinfo'] = $other_message;
      $_POST['Order']['user_ip'] = SiteUtils::getClientIp();
      $model->attributes = $_POST['Order'];

      if($_POST['ajax']){
        $valid=$model->validate();
        if($valid){
          echo CJSON::encode(array(
              'status'=>'success'
          ));
          if($model->save()){
            $insertId = $model->getPrimaryKey();
            $order_str = 'TBJ'.date("ymd").$insertId;
            Order::model()->updateBypK($insertId, array('orderNO'=>$order_str));
          }
          Yii::app()->end();
        }else{
          echo CActiveForm::validate($model);
          Yii::app()->end();
        }
      }else{
        if($model->save()){
          $insertId = $model->getPrimaryKey();
          $order_str = 'LTCTOPBJ'.date("ymd").$insertId;
          Order::model()->updateBypK($insertId, array('orderNO'=>$order_str));
          header("location:/succeed.html");
        }else{
          $model->attributes = $_POST['Order'];
        }
      }
    }
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
      $li .= '<li><input name="city2[]" type="checkbox" value="'.$v.'" id="'.$v."_".$k.'" onclick="checkd()" /><label for="'.$v."_".$k.'">'.$v.'</label></li>';
    }
    return $li;
  }

//set pagehead;
protected function setPageHeader1(){

    $this->setPageTitle("Beijing to Huangshan G-Train/Flight Timetable, Huangshan Beijing Flight/Train Tickets");
    Yii::app()->clientScript->registerMetaTag('keywords','beijing to huangshan, beijing to huangshan train, beijing huangshan flight');
    Yii::app()->clientScript->registerMetaTag('description','We are offering Beijing to Huangshan train & flight timetable and ticket booking service. Inquiry now and get best price.');

  }
}
