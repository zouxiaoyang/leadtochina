<?php
class PaymentController extends Controller
{
	public $layout='//layouts/main';

	
	public function actionPayment()
	{
		$this->setPageTitle("Payment Guide, Methods of Payment, How to Pay");
		Yii::app()->clientScript->registerMetaTag('keywords','');
		Yii::app()->clientScript->registerMetaTag('description','');
		
		$this->render('payment');
	}


	public function actionSaveMoney()
	{
		$this->setPageTitle("Payment Guide, Methods of Payment, How to Pay");
		Yii::app()->clientScript->registerMetaTag('keywords','');
		Yii::app()->clientScript->registerMetaTag('description','');
		
		$this->render('saveMoney');
	}


	public function actionTermsAndConditions()
	{
		$this->setPageTitle("Payment Guide, Methods of Payment, How to Pay");
		Yii::app()->clientScript->registerMetaTag('keywords','');
		Yii::app()->clientScript->registerMetaTag('description','');
		
		$this->render('termsAndConditions');
	}

}
