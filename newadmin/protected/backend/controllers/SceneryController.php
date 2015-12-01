<?php

class SceneryController extends Controller
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
		$model=new Scenery;

		// Uncomment the following line if AJAX validation is needed
		 //$this->performAjaxValidation($model);
		//var_dump($_POST['Scenery']);exit;
	if(isset($_POST['Scenery']))
		{
			
			$model->attributes=$_POST['Scenery'];
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
		if(isset($_POST['Scenery']))
		{
			
			$model->attributes=$_POST['Scenery'];
			if($model->save()){
				$this->redirect(array('view','id'=>$model->id));
			}
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
		$model=new Scenery('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Scenery']))
			$model->attributes=$_GET['Scenery'];

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
	
	public function actionSceneryPic(){
		$list = Yii::app()->db->createCommand('select a.id as scenery_id,a.name,a.recommand as scenery_recommand, b.id as pic_id,b.sceneryid,b.pic_dir,b.pic_path,b.recommand as pic_recommand from jos_cos_scenery a left join jos_cos_scenerypic b on a.id=b.sceneryid where a.cityid=:cityid order by b.sceneryid')->bindValue('cityid',$_POST['cityid'])->queryAll();
		$sceneryPic=array();
		foreach ($list as $k=>$v){
			$sceneryPic[$v['sceneryid']][]=$v;
		}		
		$this->render('sceneryPic',array(
			'sceneryPic'=>$sceneryPic,
		));
	}
	
	public function actionSceneryRecommand(){
		$sceneryId=Yii::app()->request->getParam('sceneryid');
		$sceneryValue=Yii::app()->request->getParam('scenery_val');
		Yii::app()->db->createCommand("update jos_cos_scenery set recommand=$sceneryValue where id=$sceneryId")->queryAll();
		echo $sceneryValue;
		Yii::app()->end();
	}
	
	public function actionSceneryPicRecommand(){
		$sceneryPicId=Yii::app()->request->getParam('scenerypicid');
		$sceneryPicValue=Yii::app()->request->getParam('scenerypic_val');
		Yii::app()->db->createCommand("update jos_cos_scenerypic set recommand=$sceneryPicValue where id=$sceneryPicId")->queryAll();
		echo $sceneryPicValue;
		Yii::app()->end();
	}

	public function actionSearch()
	{
		$list=Scenery::model()->searchScenery($_GET['q']);
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
		$model=Scenery::model()->findByPk($id);
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
