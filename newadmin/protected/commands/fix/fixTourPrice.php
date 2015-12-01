<?php
if(!$_SERVER['SSH_CONNECTION']) exit;
$yii=dirname(__FILE__).'/../../../../framework/yii.php';
$config=dirname(__FILE__).'/../../../protected/backend/config/main.php';
defined('YII_DEBUG') or define('YII_DEBUG',true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
require_once($yii);
Yii::createWebApplication($config);
$db = Yii::app()->db;

$sql = "select id,price_serialize,price_serialize_1 from jos_cos_tours_package";
$ret = $db->createCommand($sql)->queryAll();
foreach($ret as $v){
  //$price_array_2013=unserialize($v['price_serialize_1']);
  $price_array=unserialize($v['price_serialize']);
  $price = $price_array[1];
  $id = $v['id'];

  $sql2 = "update jos_cos_tours_package set price='$price' where id='$id'";
  $db->createCommand($sql2)->query();
  echo $sql2."\n";
  //sleep(1);
}
/*
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
 */
