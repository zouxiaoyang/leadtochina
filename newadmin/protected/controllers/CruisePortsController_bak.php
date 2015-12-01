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
				'condition'=>"id IN ($ids)",
				'order' => 'sort asc'
			));
		}else{
			$cruise_list= array();
		}
		$CruiseCityName	=  CruisePorts::model()->getAllCityName();


	    $cruisePortsQuestionModel=new Question;
		$this->newQuestion($cur_port);

		$this->render("portExcursion",array(
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
		$this->renderPartial("datebox",array(
			'data_info'=>$data_info,
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
		$this->setPageTitle("Port of $title, $title Tianjin Port");
		Yii::app()->clientScript->registerMetaTag('keywords',"port of $title, $title port, $title Port Transfer, $title Port Side Tour Services");
		Yii::app()->clientScript->registerMetaTag('description',"HFV provides $title Port transfer and $title Port side tour services");
	}
}
