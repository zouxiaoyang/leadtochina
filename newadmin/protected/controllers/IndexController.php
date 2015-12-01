<?php

class IndexController extends Controller
{
	public $layout='//layouts/main';

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
    	$this->setPageHeader();
      $sql = "select * from t_index_recommend_city";
      $recommend_city_query = Yii::app()->db->createCommand($sql)->queryAll();
      foreach($recommend_city_query as $v){
        $index_recommend_cities[$v['month']][] = $v; 
      }

      $recommend_review = Yii::app()->db->createCommand("select id,name,dateline,description,index_pic,nationality from {{reviews}} where recommend=1 order by id desc limit 1")->queryRow();
  		$this->render('index',array(
  			'index_recommend_cities'=>$index_recommend_cities,
        'recommend_review' => $recommend_review,
  		));
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


  protected function setPageHeader()
  {
    $this->setPageTitle("China Tours, China Travel, China Travel Agent");
    Yii::app()->clientScript->registerMetaTag('keywords','china travel, china tours, travel china, china travel agent');
    Yii::app()->clientScript->registerMetaTag('description','China Travel Agent offering China Tours, Yangtze Cruise Travel, China Flights, China Hotels Booking and huge China Travel Guide Info.');
 
  }
}
