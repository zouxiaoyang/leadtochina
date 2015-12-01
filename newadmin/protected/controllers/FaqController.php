<?php

class FaqController extends Controller
{
	public $layout='//layouts/faq';

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
    	$this->setPageHeader();
    	$data = FaqCategory::model()->getAllCategories();
  		$this->render('index',array(
  			'data'=>$data,
  		));
	}

  public function actionlist()
  {
    $criteria=new CDbCriteria(array(
      'condition'=>'cat_id='.$_GET['id'],
    ));
    $dataProvider=new CActiveDataProvider('FaqContent', array(
             'pagination'=>array(
             'pageSize'=>20,
      ),
       'criteria'=>$criteria,
     ));
    $faqCategory = FaqCategory::model()->getAllCategories();

    $category = FaqCategory::model()->findByPk($_GET['id']);
    $this->setPageTitle($category->cat_name);
    Yii::app()->clientScript->registerMetaTag('keywords',$category->meta_keywords);
    Yii::app()->clientScript->registerMetaTag('description',$category->meta_description);

    $this->render('list',
          array(
            'dataProvider'=>$dataProvider,
            'faqCategory'=>$faqCategory,
            'category'=>$category,
          )
    );
  }


	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=FaqContent::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='faq-content-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

  protected function setPageHeader()
  {
    $this->setPageTitle("Frequently Asked Questions");
    Yii::app()->clientScript->registerMetaTag('keywords','Frequently Asked Questions, China travel info and tips, inquiry, reservation and payment, transportation, accommodation, dinning and shopping in China');
    Yii::app()->clientScript->registerMetaTag('description','Questions about China travel info and tips, inquiry, reservation and payment, transportation, accommodation, dinning and shopping.');
 
  }
}
