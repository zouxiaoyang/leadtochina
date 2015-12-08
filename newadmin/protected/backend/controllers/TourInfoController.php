<?php

class TourInfoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			//'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','preview'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new TourInfo;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TourInfo']))
		{
			$model->attributes=$_POST['TourInfo'];
			if($model->save())
				//$this->redirect(array('view','id'=>$model->id));
				$this->redirect(array('tourItinerary/admin','tid'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TourInfo']))
		{

			$model->attributes=$_POST['TourInfo'];
			if($model->save()){
				$this->redirect(array('tourItinerary/admin','tid'=>$model->id));
			}
			/*
			if($model->save())
				//$this->redirect(array('view','id'=>$model->id));
			*/
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('TourInfo');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new TourInfo('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TourInfo']))
			$model->attributes=$_GET['TourInfo'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=TourInfo::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='tour-info-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionCopy($id,$isCopy)
	{
		//Copy TourInfo
		$anotherModel=$this->loadModel($id);
		$model = new TourInfo;
		$model->attributes=$anotherModel->attributes;
		$model->save();
		$tourInfoId = $model->id;
		$model->username = 'Copy '. $model->username;
		$model->save();



		//Copy TourItinerary
		$tourItinerary = TourItinerary::model()->findAllByAttributes(array('tid'=>$id));
		foreach($tourItinerary as $v){
			$itineraryModel = new TourItinerary;
			$itineraryModel->attributes = $v->attributes;
			$itineraryModel->save();
			TourItinerary::model()->updateBypK($itineraryModel->id, array("tid"=>$tourInfoId));
		}

		//Copyt TourHotel
		$tourHotel = TourHotel::model()->findAllByAttributes(array('tid'=>$id));
		if($tourHotel){
			foreach($tourHotel as $v){
				$hotelModel = new TourHotel;
				$hotelModel->attributes = $v->attributes;
				$hotelModel->save();
				TourHotel::model()->updateBypK($hotelModel->id,array("tid"=>$tourInfoId));

			}
		}

		$this->redirect(array('tourInfo/admin'));
	}
	
	public function actionCopyTourInfo($id){
		//Copy TourInfo to TourInfoFinal
		$anotherModel=$this->loadModel($id);
		
		$model = new TourInfoFinal();
		if($model->findByPk($id)){
			$model->deleteByPk($id);
		}	
		$model->attributes = $anotherModel->attributes;
		$model->save();		
		$this->redirect(array('tourInfoFinal/admin','id'=>$id));
	}

	public function actionPreview(){
		$tourInfo = TourInfo::model()->findByPk($_GET['tid']);

		$tourItinerary = TourItinerary::model()->findAllByAttributes(array('tid'=>$_GET['tid']),array('order'=>'days'));
		foreach($tourItinerary as $v){
			if($v->scenery_ids){
				$sceneries[$v->days] = Scenery::model()->findAllByPk(explode(',',$v->scenery_ids));
			}
		}

		$tourHotel = TourHotel::model()->findAllByAttributes(array('tid'=>$_GET['tid']));
		foreach($tourHotel as $v){
			$hotel_ids[] = (int)$v->hotelid;
			$hotel_room_types[(int)$v->hotelid] = $v->root_type;
		}

		$db = Yii::app()->db;
		if($hotel_ids){
			$hotel_ids = implode(',',$hotel_ids);
			$hotels = $db->createCommand("select * from jos_cos_hotel where id in($hotel_ids)")->queryAll();

			$hotel_pics_arr = $db->createCommand("select * from jos_cos_hotelpic where hotelid in($hotel_ids)")->queryAll();
			foreach($hotel_pics_arr as $v){
				$hotel_pics[$v['hotelid']][] = $v['pic_path'];
			}
		}

		$hotel_grade_arr = $db->createCommand("select id,title from jos_categories where section='com_hotel' and published=1")->queryAll();
		foreach($hotel_grade_arr as $v){
			$hotel_grade[$v['id']] = $v['title'];
		}


		
		ob_start();
		include('plan_template.php');
		$body = ob_get_contents();
		ob_end_clean();
		if($_GET['create']){
			$save_dir = 'tourManager/letter/'.date(Y).'/'.date('m').'/';
			
			if(!is_dir($save_dir)){
				mkdir($save_dir,0777,true);
			}

			//$filename = $save_dir.trim($tourInfo->tracking_code).'PriceQuotationFor'.SiteUtils::stringURLSafe($tourInfo->username).'.html';
			$filename = $save_dir.trim($tourInfo->tracking_code).'PriceQuotationFor'.$tourInfo->id.'.html';
			file_put_contents($filename, $body);
			header("Location:".Yii::app()->request->hostInfo.'/tour/'.$filename);
		}
		echo $body;
		Yii::app()->end();
	}	
	
}
