<?php
if(!$_SERVER['SSH_CONNECTION']) exit;
$yii=dirname(__FILE__).'/../../../../framework/yii.php';
$config=dirname(__FILE__).'/../../../protected/backend/config/main.php';
defined('YII_DEBUG') or define('YII_DEBUG',true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
require_once($yii);
Yii::createWebApplication($config);
$db = Yii::app()->db;

$sql = "select id,price_serialize from t_cruise";
$ret = $db->createCommand($sql)->queryAll();
foreach($ret as $v){
  $price_array_2013=unserialize($v['price_serialize']);
  $id = $v['id'];

  echo "id:".$id."\n";
  $price_array_2014 = array();
  foreach($price_array_2013 as $k=>$v){
    if(in_array($k, array(3,4,8,9))){
      $new_price = $v*1.05;
      $price_array_2014[] = (int)$new_price;
    }else{
      $price_array_2014[] = $v;
    }
  }
  $price_2014 = serialize($price_array_2014);

  $sql2 = "update t_cruise set price_serialize_2='$price_2014' where id='$id'";
  $db->createCommand($sql2)->query();
  echo $sql2."\n";
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
