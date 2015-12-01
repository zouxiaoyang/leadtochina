<?php

class EnglishController extends Controller
{

  public function actionList(){
    $db = Yii::app()->db;
    $sql = "select id,title,play_url,download_url,jifen from {{english}} order by id asc limit 10";
    $ret['list'] = $db->createCommand($sql)->queryAll();
    echo json_encode($ret);
    exit;
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
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('English');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}


	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=English::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='english-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
