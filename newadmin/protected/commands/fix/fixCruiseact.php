<?php
if(!$_SERVER['SSH_CONNECTION']) exit;
$yii=dirname(__FILE__).'/../../../../framework/yii.php';
$config=dirname(__FILE__).'/../../../protected/backend/config/main.php';
defined('YII_DEBUG') or define('YII_DEBUG',true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
require_once($yii);
Yii::createWebApplication($config);
$db = Yii::app()->db;

$list = Cruiseact::model()->findAll();
foreach($list as $v){
  $date = $v->cruise_date;
  $arr = explode('-',$date);
  $year = $arr[0];
  $month = $arr[1];
  $days = $arr[2];
  Cruiseact::model()->updateBypK($v->id,array('year'=>$year,'month'=>$month,'days'=>$days));
  echo $v->id."\n";
}
