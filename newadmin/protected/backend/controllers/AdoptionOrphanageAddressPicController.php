<?php

class AdoptionOrphanageAddressPicController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';


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
		$model=new AdoptionOrphanageAddressPic;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['AdoptionOrphanageAddressPic']))
		{
			$model->attributes=$_POST['AdoptionOrphanageAddressPic'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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

		if(isset($_POST['AdoptionOrphanageAddressPic']))
		{
			$model->attributes=$_POST['AdoptionOrphanageAddressPic'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
		$dataProvider=new CActiveDataProvider('AdoptionOrphanageAddressPic');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new AdoptionOrphanageAddressPic('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['AdoptionOrphanageAddressPic']))
			$model->attributes=$_GET['AdoptionOrphanageAddressPic'];

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
		$model=AdoptionOrphanageAddressPic::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='adoption-orphanage-address-pic-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

		//上传图片
 	public function actionUpload()
  {

		Yii::log("======================------------------------------", "info");

    //if (isset($_FILES["Filedata"]) || !is_uploaded_file($_FILES["Filedata"]["tmp_name"]) || $_FILES["Filedata"]["error"] != 0) {
  	if (isset($_FILES["Filedata"])) {

      $upload_file = $_FILES['Filedata'];
      $file_info = pathinfo($upload_file['name']);

      $file_type = $file_info['extension'];
      $subDir = date('Ym').'/';
      $saveDir = AdoptionOrphanageAddressPic::UPLOAD_PATH . $subDir;
      if(!is_dir($saveDir)){
        mkdir($saveDir, 0755,true);
      }

      $filename = uniqid().'.'.$file_info['extension'];
      $saveFile = $saveDir.$filename;
      $name = $_FILES['Filedata']['tmp_name'];
      
     


      if (move_uploaded_file($name, $saveFile)) {
      	$model = new AdoptionOrphanageAddressPic();
      	$model->oid = $_POST['id'];
      	$model->title = $_POST['alt_desc'];
      	$model->pic = $subDir.$filename;
      	$model->save();
      }else{

      }
      Yii::app()->end();
    }
		if($_GET['oid']){
    	Yii::app()->user->setState('oid', $_GET['oid']);
    }


    
    $pics = AdoptionOrphanageAddressPic::model()->findAllByAttributes(array('oid'=>Yii::app()->user->getState('oid')));
    
    $this->render('upload',array(
			'pics' => $pics
		));
  }


   //删除单张图片
  public function actionDeleteImg()
  {
  	$id = (int)$_POST['id'];
  	
  	if(!$id) exit;
  	$model = $this->loadModel($id);
  	if($model){
  		if(file_exists(AdoptionOrphanageAddressPic::UPLOAD_PATH.$model->pic)){
  			unlink(AdoptionOrphanageAddressPic::UPLOAD_PATH.$model->pic);
  		}
  		$model->delete();
  	}
  	echo 0;
  	exit;
  }

}
