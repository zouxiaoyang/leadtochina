<?php
class SearchChinaTours extends CWidget
{
    public function init()
    {
      $this->render("searchChinaTours", array(
        'price_list' => Yii::app()->params['price_list'],
        'days_list' => Yii::app()->params['days_list'],
        'city_list' => Yii::app()->params['city_list']
      ));  
    }
 
    public function run()
    {

    }
}