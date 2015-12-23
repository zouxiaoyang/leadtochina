<?php
class TopCityAttractions extends CWidget
{
    public $cityname='';
    public function init()
    {
       //get des about chinaguide
       $cityInfo = JosCosCity::model()->findByAttributes(array('name'=>$_GET['cityname']));
       if(empty($cityInfo)){
          throw new CHttpException(404, 'Page not found');
       }
       $cityId = $cityInfo->id;
       $sceneries = Yii::app()->db->createCommand("SELECT id,name,url FROM jos_cos_scenery WHERE published=1 and cityid='$cityId' order by name asc limit 10")->queryAll();
       $this->render("topCityAttractions", array(
          'cityInfo' => $cityInfo,
          'sceneries' => $sceneries
       ));  
    }
 
    public function run()
    {

    }
}