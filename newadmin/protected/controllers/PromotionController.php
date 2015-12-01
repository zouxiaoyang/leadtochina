<?php

class PromotionController extends Controller
{
 
  public $orderModel;

  public function actions() {
    return array(
       'captcha'=> array(  
          'class'=>'CaptchaAction',
    ));
  }

	
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
    $this->order();
    $m = date("m");
    $ret  = PromotionMonthTours::model()->findByAttributes(array("month"=>$m));
    $tour_ids = $ret->tour_ids;
    $tour_ids_arr = explode(',', $tour_ids);
    if($tour_ids_arr){
      foreach($tour_ids_arr as &$v){
        $v = (int)$v;
      }
      $tours = ToursPackage::model()->findAllByPk($tour_ids_arr);
    }
    $this->setPageHeader();

		$this->render('index', array(
      'model' => $this->orderModel,
      'tours' => $tours,
    ));
  }

  public function actionEarlyBirdDiscounts(){
    $this->setPageHeader();
    $this->render('earlyBirdDiscounts'); 
  }

  public function actionPayViaPaypal(){
    $this->setPageHeader();
    $this->render('payViaPaypal'); 
  }

  public function actionRegularCustomers(){
    $this->setPageHeader();
    $this->render('regularCustomers'); 
  }

  public function actionBeFaceBookFan(){
    $this->setPageHeader();
    $this->render('beFaceBookFan'); 
  }
	
  public function actionMonthlySpecialOffer(){
    $this->setPageHeader();
    $m = date("m");
    $ret  = PromotionMonthTours::model()->findByAttributes(array("month"=>$m));
    $tour_ids = $ret->tour_ids;
    $tour_ids_arr = explode(',', $tour_ids);
    if($tour_ids_arr){
      foreach($tour_ids_arr as &$v){
        $v = (int)$v;
      }
      $tours = ToursPackage::model()->findAllByPk($tour_ids_arr);
    }

    $this->render('monthlySpecialOffer', array(
      'tours' => $tours,
    )); 
  }

  public function actionThemeActivities(){
    $order = Order::model()->newOrder();
    $this->setPageHeader();

    $promotion_contents = PromotionContent::model()->findAll();
    $id = (int)$_GET['id'];
    if($id){
       $current_content = PromotionContent::model()->findAllByPk($id);
    }else{
      $current_content = $promotion_contents[0];
    }

    if($current_content->tour_ids){
      $tour_ids = $current_content->tour_ids;
      $tour_ids_arr = explode(',', $tour_ids);
      foreach($tour_ids_arr as &$v){
       $v = (int)$v;
      }
      $tours = ToursPackage::model()->findAllByPk($tour_ids_arr);
    }

    $this->render('themeActivities', array(
      'promotion_contents' => $promotion_contents,
      'current_content' => $current_content,
      'tours' => $tours,
      'model' => $order,
    )); 
  }


  public function actionGetMonthRecommendTours($month){
    $this->setPageHeader();
    $m = $month+1;
    $ret  = PromotionMonthTours::model()->findByAttributes(array("month"=>$m));
    $tour_ids = $ret->tour_ids;
    $tour_ids_arr = explode(',', $tour_ids);
    if($tour_ids_arr){
      foreach($tour_ids_arr as &$v){
        $v = (int)$v;
      }
      $tours = ToursPackage::model()->findAllByPk($tour_ids_arr);
    }

    $this->renderPartial('_month_recommend_tours', array(
      'tours' => $tours,
    )); 

  }

  public function actionSaveTianCruisePort(){
    $tuan_order_num = file_get_contents("http://www.leadtochina.com/tuan_order_num.txt");
    
    $this->render("saveTianCruisePort", array(
      'message' => Message::newMessage(),
      'tuan_order_num' => $tuan_order_num,
    ));
  }

  protected function setPageHeader()
  {
    $this->setPageTitle("Promotion Activities from LeadtoChina");
    Yii::app()->clientScript->registerMetaTag('keywords',"China tour Promotion Activities, Discount China Tour, LeadtoChina Special Offer");
    Yii::app()->clientScript->registerMetaTag('description',"China Tour Promotion Activities: Early Bird Policy, Monthly Special Offer, Paypal Benefits, Theme Activities from Lead to China");
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
          if($_POST['adults']){
            $other_message .= "<b>Adults： </b>".$_POST['adults']."</br>";
          }
      
          if($_POST['children']){
            $other_message .= "<b>Children： </b>".$_POST['children']."</br>";
          }
          if($_POST['infant']){
            $other_message .= "<b>Infant： </b>".$_POST['infant']."</br>";
          }
          
          if($_POST['Hotel_Choice']){
            $other_message .= "<b>Hotel Choice： </b>".$_POST['Hotel_Choice']."</br>";
          }

          if($_POST['your_team']){
            $other_message .= "<b>Your Team： </b>".$_POST['your_team']."</br>";
          }

          if($_POST['other_message']){
            $other_message .= "<b>Other Message： </b>".$_POST['other_message']."</br>";
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
                $order_str = 'LTC'.date("ymd").$insertId;
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
              $order_str = 'LTC'.date("ymd").$insertId;
              Order::model()->updateBypK($insertId, array('orderNO'=>$order_str));


              $full_name = mysql_real_escape_string($_POST['Order']['full_name']);
              $nationality = mysql_real_escape_string($_POST['Order']['nationality']);
              $email = mysql_real_escape_string($_POST['Order']['email']);
              $user_ip = $_POST['Order']['user_ip'];
              $time = time();
              $other_message = mysql_real_escape_string($other_message);
              $sql = "insert into leadtochina.jos_cos_customize(orderNO,full_name,nationality,email,user_ip, dateline,message) values(
                '$order_str','$full_name','$nationality','$email','$user_ip','$time','$other_message'
              )";
              Yii::app()->db->createCommand($sql)->query();

              header("location:/succeed.html");
            }else{
              $model->attributes = $_POST['Order'];
            }
          }
        }
    }


}
