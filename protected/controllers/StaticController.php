<?php

class StaticController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionNewsletter()
	{
		Seo::_seo($this,'Newsletter','','');
		if(isset($_POST['name'])){
			$this->newsLetter($_POST);
		}
		$this->render('newsletter');
	}
	
	public function actionUnsubscribeEmail(){
		if(isset($_POST['email'])){
			$this->unsubscribeEmail($_POST);
		}
		$this->render('unsubscribeEmail');
	}

// about us 

public function actionAboutUs(){
	// seo 
	$k='china travel agency, china tour company, china travel service';
	$t='About Us--Lead To China';
	$d='Lead To China: Hefei Full-View Travel Company offering China tour packages tailor-made, hotels, flight,  train tickets booking, as well as a huge reservoir of China travel information.';
	Seo::_seo($this,$t,$k,$d);
	$this->render('about-us');
}

// terms-and-conditions

public function actionTemsAndConditions(){
	
	$t='Payment Guide, Methods of Payment, How to Pay';
	$k='';
	$d='';
	Seo::_seo($this,$t,$k,$d);
	$this->render('terms-and-conditions');
}
// pricvacy
public function actionPrivacyPolicy(){

	$t='Privacy and Security-LeadtoChina';
	$k='';
	$d='LeadtoChina is responsible to protect your security and confidentiality within its control.';

	Seo::_seo($this,$t,$k,$d);
	$this->render('privacy-policy');
}
// Emergency-Response

public function actionEmergencyResponse(){

	$k='Lead to China is a professional travel company who offering 24/7 ware while in China.';
	$t='Emergency Plan While Touring in China,Examples of How We Take Care of You';
	$d='China Train Seats Types';

	Seo::_seo($this,$t,$k,$d);

	$this->render('emergency-response');
}






protected function newsLetter(){

    $name = addslashes(trim($_POST['name'])); 
    $email = addslashes(trim($_POST['email'])); 
    $sql = "select id from jos_cos_newsletter where email='$email'";
	$row = Yii::app()->db->createCommand($sql)->queryRow();
    if($row){
      echo "<script>alert('This email already exists');history.back();</script>";
      exit;
    }
    $time = time();
    $sql = "insert into jos_cos_newsletter(name,email,created) values('$name','$email','$time')";
	Yii::app()->db->createCommand($sql)->execute();
    echo "<script>alert('submit success.');history.back();</script>";
    exit;
  }

  protected function unsubscribeEmail(){

    $email = addslashes(trim($_POST['email']));  
    $time = time();
    $sql = "insert into joomla.joomla254_unsubscribe_email(created,email) values('$time','$email')";
    Yii::app()->db->createCommand($sql)->execute();
    echo 1;
    exit;
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