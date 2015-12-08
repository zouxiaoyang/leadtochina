<?php

class ChinaSceneryController extends Controller
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
		$model=new JosCosScenery;

		// Uncomment the following line if AJAX validation is needed
		 //$this->performAjaxValidation($model);
		//var_dump($_POST['Scenery']);exit;
	if(isset($_POST['JosCosScenery']))
		{			
			$model->attributes=$_POST['JosCosScenery'];
			$model->cat_path=$model->cat_path.','.$model->categoreid;
			$model->city_name=JosCosCity::model()->findByPk($model->cityid)->name;
			$model->province_name=Province::model()->findByPk($model->provinceid)->name;
			$model->url="/".strtolower($model->city_name)."/attraction/".SiteUtils::stringURLSafe($model->name).".html";
			if($model->save()){
				$this->redirect(array('view','id'=>$model->id));
			}
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
		//var_dump($_POST);exit;
//		$this->performAjaxValidation($model);
		if(isset($_POST['JosCosScenery']))
		{
			
			$model->attributes=$_POST['JosCosScenery'];
			$model->cat_path=$model->cat_path.','.$model->categoreid;
			$model->city_name=JosCosCity::model()->findByPk($model->cityid)->name;
			$model->province_name=Province::model()->findByPk($model->provinceid)->name;
			$model->url="/".strtolower($model->city_name)."/attraction/".SiteUtils::stringURLSafe($model->name).".html";
			if($model->save()){
				$this->redirect(array('view','id'=>$model->id));
			}
		}
		$catPathArr=explode(',', $model->cat_path);
		$model->cat_path=$catPathArr[0];
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
		$dataProvider=new CActiveDataProvider('Scenery');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new JosCosScenery('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['JosCosScenery']))
			$model->attributes=$_GET['JosCosScenery'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionCity()
	{
		$db = Yii::app()->db;
		$list= Yii::app()->db->createCommand('select id,name from jos_cos_city where provinceid=:provinceid')->bindValue('provinceid',$_POST['provinceid'])->queryAll();
		echo CJSON::encode($list);
		Yii::app()->end();
	}

	public function actionDistrict()
	{
		$db = Yii::app()->db;
		$list= Yii::app()->db->createCommand('select id,name from jos_cos_district where cityid=:cityid')->bindValue('cityid',$_POST['cityid'])->queryAll();
		echo CJSON::encode($list);
		Yii::app()->end();
	}
	
	public function actionGetCatTwo(){
		$catOneid=Yii::app()->getRequest()->getParam('catOneid');
		$list=Yii::app()->db->createCommand("select id,title from jos_categories where parent_id=:parentId")->bindValue('parentId',$catOneid)->queryAll();
		echo CJSON::encode($list);
		Yii::app()->end();
	}

	public function actionSearch()
	{
		$list=JosCosScenery::model()->searchScenery($_GET['q']);
		echo $list;
		Yii::app()->end();
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=JosCosScenery::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='scenery-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
