<?php

class AdoptionPackageContentController extends Controller
{

	public $layout='//layouts/column2';

	protected function beforeAction($action) {
		return true;
	}


	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionCreate(){ // 添加行程;

		$model=new AdoptionPackageContent;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['AdoptionPackageContent']))
		{
			// 先删除已经存在的行程;
			$sql = "delete from `t_adoption_package_content` where `pacakage_id`={$_POST['AdoptionPackageContent']['pacakage_id']}";
			Yii::app()->db->createCommand($sql)->execute();

			// 插入新的行程;
			$model->attributes=$_POST['AdoptionPackageContent'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionAdmin($aid){ // 管理行程;

		$sql="select id from `t_adoption_package_content` where `pacakage_id`={$aid}";

		$info = Yii::app()->db->createCommand($sql)->queryRow();

		if(!$info){
			$this->redirect(array('adoptionPackageContent/create','aid'=>$aid));
		}else{
			$model=$this->loadModel($info['id']);
			$this->render('admin',array(
				'model'=>$model,
			));
		}
	}


	public function actionUpdate($id) { //修改行程;'
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['AdoptionPackageContent']))
		{
			$model->attributes=$_POST['AdoptionPackageContent'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	public function actionView($id){ // 成功之后跳转;
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
	public function loadModel($id){ // 拉去信息;
		$model=AdoptionPackageContent::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function actionDelete($id){ //删除;

		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}


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