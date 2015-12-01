<?php

class CruiseController extends Controller
{
	private $orderModel = '';
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/main';

	/*
	public function filters()
	{
	    return array(
	        array(
	            'COutputCache+index',
	            'duration'=>3600,
	            'varyByParam'=>array('cruise_yangtzecruise_index'),
	        ),
	    );
	}
	*/

	public function beforeAction(){
		$this->setPageHeader();
		return true;
	}

	public function actions() {
		return array(
       'captcha'=> array(  
          'class'=>'CaptchaAction',
		));
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView()
	{
		$this->order();
		$id = (int)$_GET['id'];
		//$model = $this->loadModel($id);
		$cruise = Cruise::model()->find(array(
    		'select'=>'id,cruise_name',
    		'condition'=>'id='.$id
    ));
		if($cruise===null) throw new CHttpException(404,'The requested page does not exist.');
		$this->redirect(array('/cruise/cruiseOverview','id'=>$cruise->id,'name'=>SiteUtils::stringURLSafe($cruise->cruise_name)));
		exit;

		$this->newQuestion($model);

		$cruise_pic=Cruisepic::model()->findAllByAttributes(array('cruiseid'=>$id, 'state'=>0));
		$cruise_cycle=Cruisecycle::getCruiseCycle($id);
		$cruise_rooms=Cruiseroom::model()->findAllByAttributes(array('cruiseid'=>$id));
		$onboard=CruiseOnboard::model()->findAllByAttributes(array('cruiseid'=>$id));
		
		//$year = (int)$_GET['year'] ? (int)$_GET['year'] : date("Y");
		$month = (int)$_GET['month'] ? (int)$_GET['month'] : date("m");
		$year = 2015;
		
		
		$cruises = array();
		$cruiseSailling = Cruiseact::getMonthCruise($year,$month,$model);
		foreach($cruiseSailling as $v){
			$cruises[$v['days']][] = $v;
		}
		ksort($cruises);
		/*
		$sql = "select id,cruiseid,cruise_name,cruise_date,upOrdown from {{cruiseact}} where cruiseid='$id'";
		$cruiseact = Yii::app()->db->createCommand($sql)->queryAll();
		foreach($cruiseact as $v){
			$weekday = date('N', strtotime($v['cruise_date']));
			$cruiseactRet[$weekday][] = $v;
		}
		*/

		$numOfDaysInGiveMonth=date('t',strtotime($year.'-'.$month.'-1'));

		$recentMonthCruise = Cruise::getRecentMonthCruise();

		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'orderModel' => $this->orderModel,
			'cruise_pic'=>$cruise_pic,
			'cruise_cycle'=>$cruise_cycle,
			'cruise_rooms'=>$cruise_rooms,
			//'orderModel'=>$orderModel,
			'onboard'=>$onboard,
			'cruises'=>$cruises,
			'recentMonthCruise'=>$recentMonthCruise,
			'year'=>$year,
			'month'=>$month,
			'numOfDaysInGiveMonth' => $numOfDaysInGiveMonth,
			//'cruiseact' => $cruiseactRet,
			'questionModel' => new Question,
			'dataProvider' => Question::pageCommentsByQuestionId($question_type=4,$id),
		));
	}


	//Oviewview
	public function actionCruiseOverview(){
		$this->order();
		$id = $_GET['id'];
		$model = $this->loadModel($id);
		if($model===null) throw new CHttpException(404,'The requested page does not exist.');
		$cruise_pic=Cruisepic::model()->findAllByAttributes(array('cruiseid'=>$id, 'state'=>0));
		$cruise_rooms=Cruiseroom::model()->findAllByAttributes(array('cruiseid'=>$id));
		$recentMonthCruise = Cruise::getRecentMonthCruise();

		$this->render('cruiseOverview', array(
			'model'=>$model,
			'orderModel' => $this->orderModel,
			'cruise_pic'=>$cruise_pic,
			'cruise_rooms'=>$cruise_rooms,
			'recentMonthCruise'=>$recentMonthCruise,
		));
	}

	public function actionCruiseOnboard(){
		$id = $_GET['id'];
		$model = $this->loadModel($id);
		if($model===null) throw new CHttpException(404,'The requested page does not exist.');

		$onboard=CruiseOnboard::model()->findAllByAttributes(array('cruiseid'=>$id));
		$cruise_rooms=Cruiseroom::model()->findAllByAttributes(array('cruiseid'=>$id));
		$this->render('cruiseOnboard', array(
				'model'=>$model,
				'onboard'=>$onboard,
				'cruise_rooms'=>$cruise_rooms,
		));
	}

	public function actionCruiseItinerary(){
		$this->order();
		$id = $_GET['id'];
		$model = $this->loadModel($id);
		if($model===null) throw new CHttpException(404,'The requested page does not exist.');
		$cruise_cycle=Cruisecycle::getCruiseCycle($id);
		$recentMonthCruise = Cruise::getRecentMonthCruise();
		$cruise_rooms=Cruiseroom::model()->findAllByAttributes(array('cruiseid'=>$id));
		$this->render('cruiseItinerary', array(
			'cruise_cycle' => $cruise_cycle,
			'model'=>$model,
			'orderModel' => $this->orderModel,
			'recentMonthCruise'=>$recentMonthCruise,
			'cruise_rooms'=>$cruise_rooms,
		));
	}

	public function actionCruiseImages(){
		$id = $_GET['id'];
		$model = $this->loadModel($id);
		if($model===null) throw new CHttpException(404,'The requested page does not exist.');

		$cruise_deckplan_pic = Cruisepic::model()->findAllByAttributes(array('cruiseid'=>$id,'state'=>3));
		$cruise_rooms=Cruiseroom::model()->findAllByAttributes(array('cruiseid'=>$id));

		$this->render('cruiseImages', array(
			'model'=>$model,
			'cruise_rooms'=>$cruise_rooms,
			'cruise_deckplan_pic' => $cruise_deckplan_pic,
		));
	}

	public function actionCruiseDate(){
		$this->order();
		$id = $_GET['id'];
		$model = $this->loadModel($id);
		if($model===null) throw new CHttpException(404,'The requested page does not exist.');
		$recentMonthCruise = Cruise::getRecentMonthCruise();

		//$year = date("Y");
    $year = 2015;
		$month = (int)$_GET['month'] ? (int)$_GET['month'] : date('n');
		$cruises = array();
		$cruiseSailling = Cruiseact::getMonthCruise($year,$month,$model);
		foreach($cruiseSailling as $v){
			$cruises[$v['days']][] = $v;
		}
		ksort($cruises);
		$numOfDaysInGiveMonth=date('t',strtotime($year.'-'.$month.'-1'));
		$cruise_rooms=Cruiseroom::model()->findAllByAttributes(array('cruiseid'=>$id));

		$this->render('cruiseDate', array(
			'model'=>$model,
			'orderModel' => $this->orderModel,
			'recentMonthCruise'=>$recentMonthCruise,
			'cruise_rooms'=>$cruise_rooms,
			'cruises'=>$cruises,
			'year'=>$year,
			'month'=>$month,
			'numOfDaysInGiveMonth' => $numOfDaysInGiveMonth,
		));
	}

	public function actionCruisePrice(){
		$this->order();
		$id = $_GET['id'];
		$model = $this->loadModel($id);
		if($model===null) throw new CHttpException(404,'The requested page does not exist.');
		$recentMonthCruise = Cruise::getRecentMonthCruise();
		$cruise_rooms=Cruiseroom::model()->findAllByAttributes(array('cruiseid'=>$id));
		$this->render('cruisePrice', array(
			'model'=>$model,
			'orderModel' => $this->orderModel,
			'recentMonthCruise'=>$recentMonthCruise,
			'cruise_rooms'=>$cruise_rooms,
		));
	}

	public function actionCruiseTips(){
		$id = $_GET['id'];
		$model = $this->loadModel($id);
		if($model===null) throw new CHttpException(404,'The requested page does not exist.');
		$cruise_rooms=Cruiseroom::model()->findAllByAttributes(array('cruiseid'=>$id));
		$this->render('cruiseTips', array(
			'model'=>$model,
			'cruise_rooms'=>$cruise_rooms,
		));
	}

  protected function newQuestion($model)
  {
      $question = new Question;
      if(isset($_POST['Question'])){
        $question->attributes=$_POST['Question'];
        $valid=$question->validate();
        if($valid){
          $model->addQuestion($question);
          echo CJSON::encode(array(
            'status'=>'success'
          ));
          Yii::app()->end();
        }else{
          $error = CActiveForm::validate($question);
          if($error!='[]')  echo $error;
          Yii::app()->end();
        }
      }
  }

	public function actionCruiseCalendar(){
		$cruiseId=$_GET['cruiseid'];
		$year = 2015;
		$month = (int)$_GET['month'] ? (int)$_GET['month'] : 1;
		$daysNum=date('t',strtotime($year."-".$month));
		$cruises = array();
		$cruiseSailling = Cruiseact::getMonthCruise($month,$cruiseId);
		foreach($cruiseSailling as $v){
			$cruises[$v['days']][] = $v;
		}
		ksort($cruises);
		$this->render('_cruiseCalendar',array(
			'cruises'=>$cruises,
			'year'=>$year,
			'month'=>$month,
			'daysNum'=>$daysNum,
		));
	}

	public function actionCruiseOrder(){
		$id=$_GET['cruiseid'];
		$model = $this->loadModel($id);
		if($model===null) throw new CHttpException(404,'The requested page does not exist.');
		$cruise_rooms=Cruiseroom::model()->findAllByAttributes(array('cruiseid'=>$id));
		$this->render("cruiseOrder", array(
			'model' => $model,
			'cruise_rooms' => $cruise_rooms
		));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
    	$message = Message::newMessage();
    	$cruises = Cruise::model()->findAll(array(
    		'select'=>'id,cruise_name,uplowprice,category,cruise_grade',
    		'condition'=>'is_hide=0'
    	));
    	
    	$this->render('indexNew',array(
      	'model' => $message,
      	'cruises' => $cruises,
      ));
	}

	public function actionShips()
	{
		$message = Message::newMessage();
		$recommend_list = Cruise::getMonthRecommendCruises();
		$cruises = Cruise::getCruises();

		$this->render('shipsNew',array(
			'recommend_cruise'=>$recommend_list,
			'cruises' => $cruises,
			'message' => $message
		));
	}

	public function actionCalendar()
	{
		//$year = (int)$_GET['year'] ? (int)$_GET['year'] : date("Y");
    $year = 2015;
		$month = (int)$_GET['month'] ? (int)$_GET['month'] : 3;
		//$day = date('t', strtotime(date("$year-$month-1")));
		$cruiseids = $cruises = array();

		$cruiseSailling = Cruiseact::getMonthCruiseSailling($year,$month);

		foreach($cruiseSailling as $v){
			$cruises[$v['days']][] = $v;
		}
		ksort($cruises);


		$numOfDaysInGiveMonth=date('t',strtotime($year.'-'.$month.'-1'));

		/*
		 foreach($cruiseSailling as $v){
			//$thisMonthCruiseSailling[$v->days][] = $v;
			//$cruiseids[] = $v->cruiseid;
			}
			*/


		/*
		 $cruiseids = array_unique($cruiseids);

		 $thisMonthCruises = Cruise::model()->findAllCruisesByIds($cruiseids);
		 foreach($thisMonthCruises as $v){
			foreach($thisMonthCruiseSailling as $saillingDay=>$cruiseSailling){
			if(in_array($v->id, $cruiseSailling)){
			$cruises[$saillingDay][] = $v;
			}
			}
			}
			ksort($cruises);
			*/
		$this->render('calendar',array(
			'year' => $year,
			'month' => $month,
			'numOfDaysInGiveMonth' => $numOfDaysInGiveMonth,
			'cruises' => $cruises
		));
	}

	public function actionInquiry()
	{

		$model=new Order;
		$post = $_POST;
		//	var_dump($post);
		if(isset($_POST['Order']))
		{
			if($_POST['Order']['full_name']) {
				$_POST['Order']['full_name'] = $_POST['Order']['gender'].$_POST['Order']['full_name'];
			}
			$_POST['Order']['url_referer'] = Yii::app()->request->urlReferrer;
			$_POST['Order']['city'][]=$_POST['Order']['other_city'];
			$destination = implode(',', (array)$_POST['Order']['city']);
			$_POST['Order']['destination'] = $destination;
			$_POST['Order']['submit_source'] = $_SERVER['HTTP_HOST'];
			$_POST['Order']['dateline'] = time();
			$other_message='';
			if($_POST['Order']['total_price']){
				$other_message.="<b>TOUR BUDGET :</b>".$_POST['Order']['total_price']."</br>";
			}
			if($_POST['Order']['entry_city']){
				$other_message.="<b>ROUTE :</b>".$_POST['Order']['entry_city']."</br>";
			}
			if($destination){
				$other_message.="<b>CITIES WANT TO TOUR :</b>".$destination."</br>";
			}
			if($_POST['Order']['other_message']){
				$other_message.="<b>OTHER MESSAGE :</b>".$_POST['Order']['other_message']."</br>";
			}
			$_POST['Order']['other_message'] = $other_message;
			$_POST['Order']['other_travelinfo'] = $other_message;
			$_POST['Order']['entry_date'] = $_POST['Order']['entry_date'];
			$_POST['Order']['user_ip'] = SiteUtils::getClientIp();
			$_POST['Order']['ordertype']=11;// 游轮Inquiry下单方式
			$model->attributes = $_POST['Order'];

			if($model->save())
			{
				$insertId = $model->getPrimaryKey();
				$order_str = 'LTCCRUISE'.date("ymd").$insertId;
				Order::model()->updateBypK($insertId, array('orderNO'=>$order_str));
				header("location:/succeed.html");
			}else{
				$model->attributes = $post['Order'];
			}
		}
		$this->render('inquiry', array(
				'model' => $model
		));
	}
	
 		private function order()
    {
        $this->orderModel = $order =new Order;
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
					if($_POST['preferred_cabin']){
               $other_message .= "<b>Preferred Cabin:</b>".$_POST['preferred_cabin']."<br />";
          }
          if($_POST['cruise_itinerary']){
               $other_message .= "<b>Preferred Cruises Itinerary:</b>".$_POST['cruise_itinerary']."<br />";
          }
 

          if($_POST['Order']['other_message']){
            $other_message .= "<b>OTHER MESSAGE :</b>".$_POST['Order']['other_message']."</br>";
          }
          $_POST['Order']['other_travelinfo'] = $other_message;
          $_POST['Order']['user_ip'] = SiteUtils::getClientIp();
          $order->attributes = $_POST['Order'];

          if($_POST['ajax']){
            $valid=$order->validate();
            if($valid){
              echo CJSON::encode(array(
                'status'=>'success'
              ));
              if($order->save()){
                $insertId = $order->getPrimaryKey();
                $order_str = 'TBJ'.date("ymd").$insertId;
                Order::model()->updateBypK($insertId, array('orderNO'=>$order_str));
              }
              Yii::app()->end();
            }else{
              echo CActiveForm::validate($order);
              Yii::app()->end();
            }
          }else{
            if($order->save()){
              $insertId = $order->getPrimaryKey();
              $order_str = 'LTCTOPBJ'.date("ymd").$insertId;
              Order::model()->updateBypK($insertId, array('orderNO'=>$order_str));
              header("location:/succeed.html");
            }else{
              $order->attributes = $_POST['Order'];
            }
          }
        }
    }

  public function actionSubmitPopOrder(){
    
    $order =new Order;
    $order->full_name = $_GET['gender'] . $_GET['full_name'];
    $order->email = $_GET['email'];

    $order->url_referer = Yii::app()->request->urlReferrer;
    
    $order->submit_source = $_SERVER['HTTP_HOST'];
    $order->dateline = time();
    $order->entry_date = $_GET['entry_date'];
    $order->phone = $_GET['phone'];
    $order->children = $_GET['children'];
    $order->adults = $_GET['adults'];
    $order->infant = $_GET['infant'];
    $order->user_ip = SiteUtils::getClientIp();
    $order->ordertype = 11;// 游轮Inquiry下单方式

    if($_GET['cruise_itinerary']){
      $other_message .= "<b>Preferred Cruises Itinerary:</b>".$_GET['cruise_itinerary']."<br />";
    }
    if($_GET['preferred_cabin']){
      $other_message .= "<b>Preferred Cabin:</b>".$_GET['preferred_cabin']."<br />";
    }
    if($_GET['no_of_cabins']){
      $other_message .= "<b>Mp pf caboms:</b>".$_GET['no_of_cabins']."<br />"; 
    }
    if($_GET['other_cities']){
      $other_message .= "<b>Other Cities:{$_GET['other_cities']}</b>";
    }
    if($_GET['other_message']){
      $other_message .= "<b>OTHER MESSAGE :</b>".$_GET['other_message']."</br>";
    }
    $order->other_travelinfo = $other_message;

    $order->save();
    echo 0;

    Yii::app()->end();
  }

	/*
	 //Inquiry下单
	 public function actionInquiryorder(){
		$post=$_POST['Cruise'];

		//$referer = Yii::app()->request->urlReferrer;

		//$subnow=time();
		//$server_source=$_SERVER['HTTP_HOST'];
		//$destination=implode(',', $post['city']);

		$other_message='';
		if($post['budget']){
		$other_message.="<b>TOUR BUDGET :</b>".$post['budget']."</br>";
		}
		if($post['route']){
		$other_message.="<b>ROUTE :</b>".$post['route']."</br>";
		}
		if($destination){
		$other_message.="<b>CITIES WANT TO TOUR :</b>".$destination."</br>";
		}
		if($post['other_mes']){
		$other_message.="<b>OTHER MESSAGE :</b>".$post['other_mes']."</br>";
		}


		Yii::app()->joomladb->createCommand()->insert('jos_total_order', array(
		//'full_name'=>$post['gender'].$post['full_name'],
		//'gender'=>$post['gender'],
		//'nationality'=>$post['nationality'],
		//	'email'=>$post['email'],
		//'phone'=>$post['phone'],
		//'adults'=>$post['adults'],
		//'children'=>$post['childen'],
		//'infant'=>$post['infant'],
		//'entry_date'=>$post['date'],
		//'other_travelinfo'=>addslashes($other_message),
		//'url_referer'=>$referer,
		//'submit_source'=>$server_source,
		//'user_ip'=>$_SERVER[REMOTE_ADDR],
		//'dateline'=>$subnow,
		//'destination'=>$destination,
		//'other_message'=>addslashes($other_message)
		)
		);
		$insertId = Yii::app()->joomladb->getLastInsertID();
		$order_str = 'LTCCRUISE'.date("ymd").$insertId;
		Order::model()->updateBypK($insertId, array('orderNO'=>$order_str));
		header("location:/succeed.html");
		exit;
		}
		*/


	public function actionSearch()
	{
		$dataProvider = Cruise::searchCruise();
		$this->render('search',array(
			'dataProvider' => $dataProvider,
		    'cruise_names' => Cruise::getAllCruiseName()
		));
	}


	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Cruise::model()->findByPk($id);
		if($model===null)
		throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}


	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='cruise-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
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
	 		 $li .= '<li><input name="sc[]" type="checkbox" value="'.$v.'" id="'.$v."_".$k.'" onclick="checkd()" /><label for="'.$v."_".$k.'">'.$v.'</label></li>';
	 	}
	 	return $li;
	}

  public function actionCategoryList(){
      $message = Message::newMessage();

	  //$year =  (int)$_GET['year'] ? (int)$_GET['year'] : date("Y");
    $year = 2015;
	  $month = (int)$_GET['month'] ? (int)$_GET['month'] : date("m");
	  if(!isset($_GET['category'])){
	    $category = 1;
	  }else{
  	    $category = (int)$_GET['category'];
	  }
	  $numOfDaysInGiveMonth=date('t',strtotime($year.'-'.$month.'-1'));
	  
	  $cruiseids = $cruises = array();
	  $cruiseSailling = Cruiseact::getMonthCruiseSailling($year, $month, $category);
	  foreach($cruiseSailling as $v){
	    $cruises[$v['days']][] = $v;
	  }
	  ksort($cruises);
	  
	  $fleets = Cruise::model()->getCruisesByCategory($category);
	  $cruise_cycle=Cruisecycle::getCruiseCycle($fleets[0]->id);
	  $recommend_list = Cruise::getRecommendCategoryCruises($category);
	  
	  $this->render('categoryList',array(
			'recommend_cruise'=>$recommend_list,
	        'cruises' => $cruises,
	        'fleets' => $fleets,
	        'cruise_cycle' =>$cruise_cycle,
			'message' => $message,
	        'year' => $year,
	        'month' => $month,
	        'category' => $category,
	        'numOfDaysInGiveMonth' => $numOfDaysInGiveMonth,
	  ));
  }

  function actionYangtzetourFromChongqing(){
    $this->render('yangtzetourFromChongqing');
  }

  function actionYangtzetourFromShanghai(){
    $this->render('yangtzetourFromShanghai');
  }

  function actionChinaRiverCruise(){
    $this->render('chinaRiverCruise');
  }

	protected function setPageHeader()
	{
		$this->setPageTitle("Yangtze River Cruise, Yangtze River Tours, Cruise Ships, Calendar");
		Yii::app()->clientScript->registerMetaTag('keywords','yangtze river cruise, yangtze cruises, yangtze river tour, china river cruise');
		Yii::app()->clientScript->registerMetaTag('description','Yangtze River Cruise including yangtze river tours, 2011 yangtze cruise calendar, 4 and 5 star cruise ships with great discount.');
	}

	protected function outputSailing($end_day, $cruises, $model){
		if($cruises[$end_day]){
					$sailing = $cruises[$end_day][0];
          $month = date('m', strtotime($end_day));

					if($sailing['upOrdown'] == 1){
            if(in_array($month, array(4,5,6,7,8,9,10))){
              $price = $sailing['downhighprice'];
            }else{
              $price = $sailing['downlowprice'];
            }
            
            //echo "<em>".Cruise::$downCityArr[$sailing['downcity']]."</em><b> from ".SiteUtils::getCurrencyPrice($price)."</b>";
            echo "<em>".Cruise::$downCityArr[$sailing['downcity']]."</em><b> from ".$price."</b>";
          }else{
            if(in_array($month, array(4,5,6,7,8,9,10))){
              $price = $sailing['uplowprice'];  //旺季
            }else{
              $price = $sailing['uphighprice']; //淡季 字段名不符
            }
            //echo "<em>".Cruise::$upCityArr[$sailing['upcity']]."</em><b> from ".SiteUtils::getCurrencyPrice($price)."</b>";
            echo "<em>".Cruise::$upCityArr[$sailing['upcity']]."</em><b> from ".$price."</b>";
          }
		}
	}


		protected function outputSailing2($end_day, $cruise){

			$year = $cruise['year'];
			$month = $cruise['month'];
			$cruiseid = $cruise['id'];
			$cruise_name = $cruise['cruise_name'];
			$cruise_grade = $cruise['cruise_grade'];
			$url = Yii::app()->createUrl('cruise/view',array('year'=>$year,'month'=>$month,'id'=>$cruiseid,'name'=>SiteUtils::stringURLSafe($cruise_name)));
			echo "<span>
					<a href=\"$url\">
					$cruise_name</a> $cruise_grade*
					</span>";

			if($cruise['upOrdown'] == 1){
            if(in_array($month, array(4,5,6,7,8,9,10))){
              $price = $cruise['downhighprice'];
            }else{
              $price = $cruise['downlowprice'];
            }
            
            //echo "<em>".Cruise::$downCityArr2[$cruise['downcity']]."</em><b> ".SiteUtils::getCurrencyPrice($price)."</b>";
            echo "<em>".Cruise::$downCityArr2[$cruise['downcity']]."</em><b> ".$price."</b>";
          }else{
            if(in_array($month, array(4,5,6,7,8,9,10))){
              $price = $cruise['uplowprice'];  //旺季
            }else{
              $price = $cruise['uphighprice']; //淡季 字段名不符
            }
            echo "<em>".Cruise::$upCityArr2[$cruise['upcity']]."</em><b> ".$price."</b>";
            //echo "<em>".Cruise::$upCityArr2[$cruise['upcity']]."</em><b> ".SiteUtils::getCurrencyPrice($price)."</b>";
          }
		}
	
	

}
