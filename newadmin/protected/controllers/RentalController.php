<?php

class RentalController extends Controller
{
	public $layout='//layouts/main';

	
	public function actionCarRental()
	{
		$this->layout = "beijingTour";
		$this->setPageTitle("Beijing Car Rental, HFV provides cheap and guaranteed Beijing car rental services");
		Yii::app()->clientScript->registerMetaTag('keywords','Beijing Car Rental Service, Beijing Van Rental Service, Beijing Bus Rental Service, Beijing Car Rental and Driver Rental Service');
		Yii::app()->clientScript->registerMetaTag('description','Hefei Full View Travel Service Comapny provides cheap and guaranteed Beijing Car Van Bus Rental Services.');
		$model=new Order;
		$this->rentalOrder($model);
		$carRentalList=Rental::getRentalList(1);
		$this->render('carRental',array(
  			'model'=>$model,
  			'carRentalList'=>$carRentalList,
		));
	}

	public function actionGuideRental()
	{
		$this->layout = "beijingTour";
		$this->setPageTitle("Beijing Guide Rental Service, HFV provides Beijing guide service with lower price");
		Yii::app()->clientScript->registerMetaTag('keywords',"Beijing Guide Rental Service, Beijing Guide and Car Rental Service, Beijing Great Wall Guide Rental Serive, Beijing City Tour Guide Rental Serice");
		Yii::app()->clientScript->registerMetaTag('description',"Hefei Full View Travel Service Company provides Beijing City Tour & Great Wall Tour Guide Rental Serivce for tourists.");
		$model=new Order;
		$this->rentalOrder($model);
		$guideRentalList=Rental::getRentalList(2);
		$this->render('guideRental',array(
  			'model'=>$model,
  			'guideRentalList'=>$guideRentalList,
		));
	}

	protected function rentalOrder($model){
		$saveOrderOrder=array();
		if(isset($_POST['Order'])){
			$post=$_POST['Order'];
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
			$saveOrder['entry_date']=$post['entry_date'];
			$saveOrder['email']=$post['email'];
			$saveOrder['phone']=$post['phone'];
			$saveOrder['ordertype']=$post['ordertype'];
			$saveOrder['verifyCode']=$post['verifyCode'];

			$other_message='';
			if($post['executor']){
				$other_message.="<b>OCCASION :</b>".$post['executor']."</br>";
			}
			if($post['nationality']){
				$other_message.="<b>VEHICLE TYPE :</b>".$post['nationality']."</br>";
			}
			if($post['addr']){
				$other_message.="<b>LANGUAGE :</b>".$post['addr']."</br>";
			}
			if($post['entry_city']){
				$other_message.="<b>GUIDER GENDER :</b>".$post['entry_city']."</br>";
			}
			if($post['destination']){
				$other_message.="<b>HOTEL :</b>".$post['destination']."</br>";
			}
			if($post['city']){
				$other_message.="<b>HOTEL TEL:</b>".$post['city']."</br>";
			}
			if($post['duration']){
				$other_message.="<b>PICK UP TIME :</b>".$post['duration']."</br>";
			}
			if($post['other_city']){
				$other_message.="<b>TRAVELERS NUM :</b>".$post['other_city']."</br>";
			}
			if($post['other_message']){
				$other_message.="<b>OTHER MESSAGE :</b>".$post['other_message']."</br>";
			}

			$saveOrder['other_travelinfo']=$other_message;

			$model->attributes=$saveOrder;
			if($model->save()){
				$insertId=$model->getPrimaryKey();
				$order_str = 'LTCRENTAL'.date("ymd").$insertId;
				Order::model()->updateBypK($insertId, array('orderNO'=>$order_str));
				header("location:/succeed.html");
			}else{
				$model->attributes=$post;
			}
		}
	}

}
