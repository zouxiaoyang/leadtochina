<?php

class RulesForCouponUsageController extends Controller
{

  public function actions() {
		return array(
       'captcha'=> array(  
          'class'=>'CaptchaAction',
		));
  }

  public function actionIndex(){
      $this->render('index',array(
      	'message' => Message::newMessage()
      ));
  }

  
}
