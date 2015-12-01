<?php

class CruiseroomController extends Controller
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
		$model=new Cruiseroom;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Cruiseroom']))
		{
			unset($_POST['Cruiseroom']['room_pic1']);
			unset($_POST['Cruiseroom']['room_pic2']);			
			$model->attributes=$_POST['Cruiseroom'];
			$file1=CUploadedFile::getInstance($model, 'room_pic1');
			$file2=CUploadedFile::getInstance($model, 'room_pic2');
			if($file1){
				$fileName1=uniqid().".".$file1->extensionName;
				$file1->saveAs(Cruiseroom::UPLOAD_PATH.$fileName1);
				$model->room_pic1=$fileName1;				
			}
			if($file2){
				$fileName2=uniqid().".".$file1->extensionName;
				$file2->saveAs(Cruiseroom::UPLOAD_PATH.$fileName2);
				$model->room_pic2=$fileName2;				
			}
			if($model->save())
				$this->redirect(array('admin','cruiseid'=>$model->cruiseid));
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

		if(isset($_POST['Cruiseroom']))
		{			
			unset($_POST['Cruiseroom']['room_pic1']);
			unset($_POST['Cruiseroom']['room_pic2']);			
			$model->attributes=$_POST['Cruiseroom'];
			$file1=CUploadedFile::getInstance($model, 'room_pic1');
			$file2=CUploadedFile::getInstance($model, 'room_pic2');
			if($file1){
				$fileName1=uniqid().".".$file1->extensionName;
				$file1->saveAs(Cruiseroom::UPLOAD_PATH.$fileName1);
				$model->room_pic1=$fileName1;				
			}
			if($file2){
				$fileName2=uniqid().".".$file1->extensionName;
				$file2->saveAs(Cruiseroom::UPLOAD_PATH.$fileName2);
				$model->room_pic2=$fileName2;				
			}					
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
		$dataProvider=new CActiveDataProvider('Cruiseroom');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Cruiseroom('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Cruiseroom']))
			$model->attributes=$_GET['Cruiseroom'];

		$this->render('admin',array(
			'model'=>$model,
			'cruise' => Cruise::model()->findByPk(Yii::app()->user->getState('cruiseid'))
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Cruiseroom::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='cruiseroom-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
