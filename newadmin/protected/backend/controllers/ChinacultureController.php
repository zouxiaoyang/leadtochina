<?php

class ChinacultureController extends Controller
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
		$model=new Chinaculture;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Chinaculture']))
		{
			if($_POST['category1']) $cat_path[] = $_POST['category1'];
			if($_POST['category2']) $cat_path[] = $_POST['category2'];
			if($_POST['category3']) $cat_path[] = $_POST['category3'];
			if($cat_path){
				$_POST['Chinaculture']['cat_path'] = implode(',', $cat_path);
				$_POST['Chinaculture']['catid'] = array_pop($cat_path);
			}
			if(Yii::app()->session['category_section']){
					$_POST['Chinaculture']['section'] = Yii::app()->session['category_section'];
			}
			$model->attributes=$_POST['Chinaculture'];
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

		if(isset($_POST['Chinaculture']))
		{
			if($_POST['category1']) $cat_path[] = $_POST['category1'];
			if($_POST['category2']) $cat_path[] = $_POST['category2'];
			if($_POST['category3']) $cat_path[] = $_POST['category3'];
			if($cat_path){
				$_POST['Chinaculture']['cat_path'] = implode(',', $cat_path);
				$_POST['Chinaculture']['catid'] = array_pop($cat_path);
			}
			if(Yii::app()->session['category_section']){
					$_POST['Chinaculture']['section'] = Yii::app()->session['category_section'];
			}
			$model->attributes=$_POST['Chinaculture'];
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
		$dataProvider=new CActiveDataProvider('Chinaculture');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Chinaculture('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Chinaculture']))
			$model->attributes=$_GET['Chinaculture'];

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
		$model=Chinaculture::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='chinaculture-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
