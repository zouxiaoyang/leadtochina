<?php
class CFSwfUpload extends CWidget
{
  public $config=array();
  public function init()
  {
      $this->render("view", array());  
  }

  public function run()
  {
    $baseUrl = Yii::app()->request->baseUrl;
    Yii::app()->clientScript->registerScriptFile($baseUrl . '/js/swfupload/swfupload.js', CClientScript::POS_HEAD);
    Yii::app()->clientScript->registerScriptFile($baseUrl . '/js/swfupload/swfupload.queue.js', CClientScript::POS_HEAD);
    Yii::app()->clientScript->registerScriptFile($baseUrl . '/js/swfupload/fileprogress.js', CClientScript::POS_HEAD);
    Yii::app()->clientScript->registerScriptFile($baseUrl . '/js/swfupload/handlers.js', CClientScript::POS_HEAD);   
   
  } 
       
}