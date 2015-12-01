<?php
class CruisePortsController extends Controller
{

	protected $model;

	public function actionIndex()
	{
		$this->setPageHeader();
		$model=new Order;
		$this->performAjaxValidation($model);
		if(isset($_POST['Order'])){
			$post=$_POST['Order'];
			$saveOrderOrder=array();
			unset($_POST['Order']);
			if($post['full_name']) {
				$saveOrder['full_name'] = $post['gender'].$post['full_name'];
			}
			$saveOrder['url_referer'] = Yii::app()->request->urlReferrer;
			$saveOrder['submit_source'] = $_SERVER['HTTP_HOST'];
			$saveOrder['dateline'] = time();
			$saveOrder['user_ip'] = SiteUtils::getClientIp();
			$saveOrder['entry_date']=$post['entry_date'];
			$saveOrder['end_date']=$post['end_date'];
			$saveOrder['nationality']=$post['nationality'];
			$saveOrder['email']=$post['email'];
			$saveOrder['adults']=$post['adults'];
			$saveOrder['children']=$post['children'];
			$saveOrder['infant']=$post['infant'];
			$saveOrder['ordertype']=17; //Cruise Ports下单页

			$other_message='';
			if($post['final_price']){
				$other_message.="<b>HOTEL CLASS :</b>".$post['final_price']."</br>";
			}
			if($post['total_price']){
				$other_message.="<b>NUM OF ROOM :</b>".$post['total_price']."</br>";
			}
			if($post['other_message']){
				$other_message.="<b>OTHER MESSAGE :</b>".$post['other_message']."</br>";
			}

			$saveOrder['other_travelinfo']=$other_message;

			$model->attributes=$saveOrder;
			if($model->save()){
				$insertId=$model->getPrimaryKey();
				$order_str = 'LTCCRUISEPORT'.date("ymd").$insertId;
				Order::model()->updateBypK($insertId, array('orderNO'=>$order_str));
				header("location:/succeed.html");
			}else{
				$model->attributes=$post;
			}

		}
		$allPortInfos=CruisePorts::getAllProtInfos();
		$this->render('index',array(
    	'allPortInfos'=>$allPortInfos,
    	'model'=>$model,
		));
	}

	//新首页
	public function actionIndex2(){
		$this->submitOrder();
		$cruise_list = InternationalCruise::model()->findAll(array(
			'condition'=>" status=0",
			'order' => 'sort asc'
		));
		$cruise_port_list = CruisePorts::model()->findAll();
		$this->render("index2", array(
			'cruise_list' => $cruise_list,
			'cruise_port_list' => $cruise_port_list,
			'model'=>$this->model,
		));
	}

	//游轮详情页
	public function actionCruiseView(){
		$this->submitOrder();
		$id = (int)$_GET['id'];
		$cur_cruise = InternationalCruise::model()->findByPk($id);
		if(empty($cur_cruise)){
			throw new CHttpException(404,'The requested page does not exist.');
		}
		$cruise_list = InternationalCruise::model()->findAll(array(
     'select' => 'id,name',
	 'condition'=>" status=0",
     'order' => 'sort asc'
    ));
    $cruise_port_list = CruisePorts::model()->findAll(array(
    	'select' => 'id,cityName',
    ));

		$cur_cruise_excursions = InternationalCruiseChinaExcursions::model()->findAllByAttributes(array("cid"=>$id));

		$cruiseQuestionModel=new Question;
		$this->newQuestion($cur_cruise);
		
		$this->render("CruiseView", array(
			'cruise_list' => $cruise_list,
			'cruise_port_list' => $cruise_port_list,
			'cur_cruise' => $cur_cruise,
			'cur_cruise_excursions' => $cur_cruise_excursions,
			'model'=>$this->model,
			'cruiseQuestionModel'=>$cruiseQuestionModel,
			'dataProvider' => Question::pageCommentsByQuestionId($question_type=5,$question_type_id=$id),
		));
	}

	//港口介绍页面
	public function actionPortIntroduction(){
		$this->submitOrder();
		$id = (int)$_GET['id'];
		$cur_port = CruisePorts::model()->findByPk($id);
		if(empty($cur_port)){
			throw new CHttpException(404,'The requested page does not exist.');
		}
		$cruise_port_list = CruisePorts::model()->findAll(array(
    	'select' => 'id,cityName',
    ));
		$cruise_list = InternationalCruise::model()->findAll(array(
     'select' => 'id,name',
	 'condition'=>" status=0",
     'order' => 'sort asc'
    ));

    $cruisePortsQuestionModel=new Question;
		$this->newQuestion($cur_port);

		$this->render("portIntroduction", array(
			'cur_port' => $cur_port,
			'cruise_list' => $cruise_list,
			'cruise_port_list' => $cruise_port_list,
			'model'=>$this->model,
			'cruisePortsQuestionModel'=>$cruisePortsQuestionModel,
			'dataProvider' => Question::pageCommentsByQuestionId($question_type=3,$question_type_id=$id),
		));
	}


	//港口Excursion页面
	public function actionPortExcursiontest1(){
		$this->submitOrder();
		$id = (int)$_GET['id'];
		$cur_port = CruisePorts::model()->findByPk($id);
		if(empty($cur_port)){
			throw new CHttpException(404,'The requested page does not exist.');
		}
		$cruise_port_list = CruisePorts::model()->findAll(array(
    	'select' => 'id,cityName',
    ));
		$cruise_list = InternationalCruise::model()->findAll(array(
     'select' => 'id,name',
	 'condition'=>" status=0",
     'order' => 'sort asc'
    ));
    $cur_port_excursion = CruisePortsExcursions::model()->findAllByAttributes(array("cid"=>$id));

    $cruisePortsQuestionModel=new Question;
		$this->newQuestion($cur_port);

		$this->render("portExcursion",array(
			'cur_port' => $cur_port,
			'cruise_list' => $cruise_list,
			'cruise_port_list' => $cruise_port_list,
			'cur_port_excursion' => $cur_port_excursion,
			'model'=>$this->model,
			'cruisePortsQuestionModel'=>$cruisePortsQuestionModel,
			'dataProvider' => Question::pageCommentsByQuestionId($question_type=3,$question_type_id=$id),
		));
	}




	//新港口Excursion页面
	public function actionPortExcursion(){
		$this->submitOrder();
		$id = (int)$_GET['id'];
		$cur_port = CruisePorts::model()->findByPk($id);
		if(empty($cur_port)){
			throw new CHttpException(404,'The requested page does not exist.');
		}
		//'select' => 'id,cid,pid,schedule,tour_type_ids',
		/*$cruise_port_list = CruisePorts::model()->findAll(array(
    	'select' => 'id,cityName',
    ));*/

		$cruise_port_list2 = cruisePorts::model()->findAll();
		//print_r($cruise_port_list2 );exit;
		$cruise_port_list = CruisePorstType::model()->getAllCruisePorstType();

		$cur_cruise_excursions = CruisePorstType::model()->findAllByAttributes(array("pid"=>$id));
		//print_r($cur_cruise_excursions);exit;
		
		$ids= '';
		if(count($cur_cruise_excursions)>0){
			foreach($cur_cruise_excursions as $k=>$v){
				$ids.=$v->cid.',';
			}
			$ids =substr($ids,0,-1);
			$cruise_list = InternationalCruise::model()->findAll(array(
				'select' => 'id,name',
				'condition'=>"id IN ($ids) and status=0",
				'order' => 'sort asc'
			));
		}else{
			$cruise_list= array();
		}
		$CruiseCityName	=  CruisePorts::model()->getAllCityName();


	    $cruisePortsQuestionModel=new Question;
		$this->newQuestion($cur_port);

		$setPageTitle = $keywords = $description='';
		if($CruiseCityName[$id]=="Tianjin Port"){
			$setPageTitle 	= "Tianjin Port Transfer and Excursion Service 2015, 2016";
			$keywords		= "tianjin port, tianjin to bejing transfer, tianjin port transfer, tianjin port excursions";
			$description		= "We are offering cheap Tianjin Port to Beijing transfer service and 1-5 days Beijing tours before/after the cruise. Lowest price guarantee!";
		}elseif($CruiseCityName[$id]=="Shanghai Port"){
			$setPageTitle 	= "Shanghai Port Transfer and Excursion Service 2015 2016";
			$keywords		= "shanghai port, shanghai port transfer, shanghai port excursions";
			$description		= "We are offering cheap Shanghai Baoshan port to the city transfer service and 1-5 days Shanghai city & side tours before/after the cruise. Lowest price guarantee!";
		}elseif($CruiseCityName[$id]=="Dalian Port"){
			$setPageTitle 	= "Dalian Port Transfer and Excursion Service 2015 2016";
			$keywords		= "dalian port, dalian port transfer, dalian port excursions";
			$description		= "We are offering cheap Dalian port transfer and Dailian day tour service with lowest price guarantee!";
		}else{
			$setPageTitle = $cur_port->cityName . ' Port Excursions';
		}
		$this->setPageTitle($setPageTitle);
		Yii::app()->clientScript->registerMetaTag('keywords',$keywords);
		Yii::app()->clientScript->registerMetaTag('description',$description);

		$this->render("portExcursiontest1",array(
			'cur_port' => $cur_port,
			'CruiseCityName' => $CruiseCityName,
			'cruise_list' => $cruise_list,
			'cruise_port_list' => $cruise_port_list,
			'cruise_port_list2' => $cruise_port_list2,
			'model'=>$this->model,
			'cruisePortsQuestionModel'=>$cruisePortsQuestionModel,
			'dataProvider' => Question::pageCommentsByQuestionId($question_type=3,$question_type_id=$id),
		));
	}

	//游轮图片列表
	public function actionGetImageList(){
		$id = (int)$_GET['id'];
		if(empty($id)){
			throw new CHttpException(404,'The requested page does not exist.');
		}
		$cruise_pic=Cruisepic::model()->findAllByAttributes(array('cruiseid'=>$id, 'state'=>4));
		$ages = array();
		if(count($cruise_pic)>0){
			foreach ($cruise_pic as $row) {
				$ages[] = $row->id;
			}
			array_multisort($ages, SORT_ASC, $cruise_pic);
		}
		$this->renderPartial("get_image_list",array(
			'cruise_pic'=>$cruise_pic,
			'model'=>$this->model,
		));
	}


	//游轮航期列表
	public function actionGetDataList(){
		$id = (int)$_GET['id'];
		if(empty($id)){
			throw new CHttpException(404,'The requested page does not exist.');
		}
		$data_info = CruisePorstType::model()->findByPk($id);
		$CruiseCityName	=  CruisePorts::model()->getAllCityName();
		$cid 	=$data_info->cid;
		$pid 	=$data_info->pid;
		$cityName 	= substr($CruiseCityName[$data_info->pid], 0, -5);
		$cruise_info = InternationalCruise::model()->findByPk($cid);
		$schedule = unserialize($cruise_info->schedule);
		$schedule_info = array();
		foreach($schedule['port'] as $k=>$v){
			$schedule_info[$v]['arrive'][]=$schedule['arrive'][$k];
			$schedule_info[$v]['depart'][]=$schedule['depart'][$k];
			$schedule_info[$v]['port'][]=$v;
			$schedule_info[$v]['status'][]=$schedule['status'][$k];
			$schedule_info[$v]['url'][]=$schedule['url'][$k];
		}
		$this->renderPartial("datebox",array(
			'data_name'=>$cityName,
			'cruise_name'=>$cruise_info->name,
			'schedule_arr'=>$schedule_info,
			'model'=>$this->model,
		));
	}

	//游轮Faq
	public function actionCruiseFaq(){
		$this->submitOrder();
		$id = (int)$_GET['id'] ? $_GET['id'] : 999;
		$cur_port = '';
		if($id != 999){
			$cur_port = CruisePorts::model()->findByPk($id);	
		}
		

		$cruise_port_list = CruisePorts::model()->findAll(array(
    	'select' => 'id,cityName',
    ));
		$cruise_list = InternationalCruise::model()->findAll(array(
     'select' => 'id,name',
	 'condition'=>" status=0 ",
     'order' => 'sort asc'
    ));
    $cur_faq_list = CruiseFaq::model()->findAllByAttributes(array("cid"=>$id));
		$this->render("cruiseFaq", array(
			'cruise_list' => $cruise_list,
			'cruise_port_list' => $cruise_port_list,
			'model'=>$this->model,
			'cur_faq_list' => $cur_faq_list,
			'cur_port' => $cur_port,
		));
	}

	public function actionPortView()
	{
		$this->setPageHeader(ucfirst($_GET['cityname']));
		$id=$_GET['id'];
		$portInfo=CruisePorts::model()->findByPk($id);
		if(empty($portInfo)){
      throw new CHttpException(404, 'Page not found');
    }
    $cruisePortsQuestionModel=new Question;
		$this->newQuestion($portInfo);
		$this->render('view',array(
    	'portInfo'=>$portInfo,
			'cruisePortsQuestionModel'=>$cruisePortsQuestionModel,
			'dataProvider' => Question::pageCommentsByQuestionId($question_type=3,$question_type_id=$id),
		));
	}

	public function actionShanghaiCruisePort(){

		$this->submitOrder();
		$this->render('shanghaiCruisePort', array(
			'model'=>$this->model,
		));
	}

	public function actionTianjinCruisePort(){
		$this->submitOrder();
		$this->render('tianjinCruisePort', array(
			'model'=>$this->model,
		));
	}

	public function actionServicePassengersFrom($id){
		
		$this->render('servicePassengerFrom'.$id);
	}

	protected function submitOrder(){
		$this->model = $model=new Order;
		$this->performAjaxValidation($model);
		if(isset($_POST['Order'])){
			$post=$_POST['Order'];
			$saveOrderOrder=array();
			unset($_POST['Order']);
			if($post['full_name']) {
				$saveOrder['full_name'] = $post['gender'].$post['full_name'];
			}
			if($post['entry_date']){
				if(!preg_match('/^[A-Za-z0-9\/\-\_\.\s]+$/',$post['entry_date'])){
				  die("error"); 
				} 
			}
			$saveOrder['url_referer'] = Yii::app()->request->urlReferrer;
			$saveOrder['submit_source'] = $_SERVER['HTTP_HOST'];
			$saveOrder['dateline'] = time();
			$saveOrder['user_ip'] = SiteUtils::getClientIp();
			$saveOrder['entry_date']=$post['entry_date'];
			$saveOrder['end_date']=$post['end_date'];
			$saveOrder['nationality']=$post['nationality'];
			$saveOrder['email']=$post['email'];
			$saveOrder['adults']=$post['adults'];
			$saveOrder['children']=$post['children'];
			$saveOrder['infant']=$post['infant'];
			$saveOrder['ordertype']=17; //Cruise Ports下单页

			$other_message='';

			if($post['final_price']){
				$other_message.="<b>HOTEL CLASS :</b>".$post['final_price']."</br>";
			}
			if($post['total_price']){
				$other_message.="<b>NUM OF ROOM :</b>".$post['total_price']."</br>";
			}
			if($post['cruise_name']){
				$other_message.="<b>Cruise :</b>".$post['cruise_name']."</br>";	
			}
			if($post['other_message']){
				$other_message.="<b>OTHER MESSAGE :</b>".$post['other_message']."</br>";
		        if(strpos($other_message, "http") !== false || strpos($other_message, "www") !== false){
		            echo 'invaid conent';
		            exit;
		        }
			}

			$saveOrder['other_travelinfo']=$other_message;
			$model->attributes=$saveOrder;
			if($model->save()){
				$insertId=$model->getPrimaryKey();
				$order_str = 'LTCCRUISEPORT'.date("ymd").$insertId;
				Order::model()->updateBypK($insertId, array('orderNO'=>$order_str));
				header("location:/succeed.html");
			}else{
				$model->attributes=$post;
			}

		}
	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='cruisePortsOrderForm')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

  protected function newQuestion($model)
  {
      $question = new Question;
      if(isset($_POST['Question'])){
		$other_message =str_replace(' ','',$_POST['Question']['content']);
      	$other_message =  strtolower($other_message);
      	if(strpos($other_message, "http") !== false || strpos($other_message, "www") !== false || strpos($other_message, ".com") !== false){
          echo CJSON::encode(array('Question_content'=>"Please don't fill in URL!"));
          Yii::app()->end();
        }



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


	protected function setPageHeader($title="China")
	{
		$this->setPageTitle("Port of $title, $title Tianjin Port123132");
		Yii::app()->clientScript->registerMetaTag('keywords',"port of $title, $title port, $title Port Transfer, $title Port Side Tour Services");
		Yii::app()->clientScript->registerMetaTag('description',"HFV provides $title Port transfer and $title Port side tour services");
	}
	//上海港口的分类页面
	public function actionShanghaicelebritycruise(){
		$this->setPageHeader();
		$model=new Message;
		if($_POST){
			$saveOrderOrder=array();
			$saveOrder['username'] = $post['Gender'].$post['full_name'];
			$saveOrder['url_referer'] = Yii::app()->request->urlReferrer;
			$saveOrder['submit_source'] = $_SERVER['HTTP_HOST'];
			$saveOrder['dateline'] = time();
			$saveOrder['user_ip'] = SiteUtils::getClientIp();
			$saveOrder['email']=$post['email'];
			$saveOrder['infant']=$post['message'];

			$model->attributes=$saveOrder;
			if($model->save()){
				header("location:/succeed.html");
			}else{
				$model->attributes=$post;
			}

		}
		$this->submitOrder();		
		$this->render("shanghaicelebritycruise", array(
        'model'=>$this->model,
        'message' => Message::newMessage()
		));
	}
	public function actionTianjinPortBeijingBus(){
		$this->submitOrder();	
		$this->render("tianjin-port-beijing-shutlle-bus", array(
        'model'=>$this->model,
        'message' => Message::newMessage()
		));
	}

}
