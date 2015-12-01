<?php

class DiyTourController extends Controller
{

	private $orderModel;

 	public function actionIndex()
	{
		$this->order();
		$this->render('index', array(
			'model' => $this->orderModel,
		));
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
          if($_POST['youths']){
            $other_message .= "<b>Youths： </b>".$_POST['youths']."</br>";
          }
          
          if($_POST['children']){
            $other_message .= "<b>Children： </b>".$_POST['children']."</br>";
          }
          if($_POST['infants']){
            $other_message .= "<b>Infants： </b>".$_POST['infants']."</br>";
          }
          
          if($_POST['regard_travel_group']){
            $other_message .= "<b>Comments regarding your travelling group： </b>".$_POST['regard_travel_group']."</br>";
          }
          if($_POST['tour_code']){
            $other_message .= "<b>Tour Code： </b>".$_POST['tour_code']."</br>";
          }

          if($_POST['city']){
          	$cities = implode(',', $_POST['city']);
            $other_message .= "<b>Choose destination： </b>".$cities."</br>";
          }

          if($_POST['interests']){
          	$interests = implode(',', $_POST['interests']);
            $other_message .= "<b>select your ideal vacation type or special interests:</b>".$interests."</br>";
          }

          if($_POST['star']){
            $other_message .= "<b>Level of Accommodation： </b>".$_POST['star']."</br>";
          }

           if($_POST['traffic']){
            $other_message .= "<b>Train v Plane： </b>".$_POST['traffic']."</br>";
          }

					if($_POST['length_of_stay']){
            $other_message .= "<b>Length of stay： </b>".$_POST['length_of_stay']."</br>";
          }
          if($_POST['comment_length_of_stay']){
            $other_message .= "<b>Comments regarding length of stay： </b>".$_POST['comment_length_of_stay']."</br>";
          }

          if($_POST['per_person_budget']){
            $other_message .= "<b>Per Person Budget： </b>".$_POST['per_person_budget']." USD</br>";
          }

          if($_POST['budget_flexible']){
            $other_message .= "<b>Is Budget Flexible： </b>".$_POST['budget_flexible']."</br>";
          }
          if($_POST['want_see_and_do']){
            $other_message .= "<b>What Would You Like To See And Do： </b>".$_POST['want_see_and_do']."</br>";
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
