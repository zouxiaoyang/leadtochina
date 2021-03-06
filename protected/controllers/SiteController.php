<?php
class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		//seo of contact.
		$k='china travel agency, china tour company, china travel service';
		$t='Contact Us--Lead To China';
		$d='Lead To China: Hefei Full-View Travel Company offering China tour packages tailor-made, hotels, flight,  train tickets booking, as well as a huge reservoir of China travel information.';
		Seo::_seo($this,$t,$k,$d);
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		// seo
		$k='china travel, china tours, travel china, china travel agent';
		$t='China Tours, China Travel, China Travel Agent';
		$d='China Travel Agent offering China Tours, Yangtze Cruise Travel, China Flights, China Hotels Booking and huge China Travel Guide Info.';
		Seo::_seo($this,$t,$k,$d);
		$this->render('index');
	}
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}
	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new JosCosMessage;
		if(isset($_POST['JosCosMessage']))
		{
			$_POST['JosCosMessage']['ip'] = Yii::app()->request->userHostAddress;
			$_POST['JosCosMessage']['dateline'] = time();
			$_POST['JosCosMessage']['referer_url'] = Yii::app()->request->urlReferrer;
			$model->attributes=$_POST['JosCosMessage'];
			if($model->validate() && $model->save())
			{	
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}
	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}
	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}