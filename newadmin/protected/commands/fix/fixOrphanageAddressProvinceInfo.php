<?php
if(!$_SERVER['SSH_CONNECTION']) exit;
$yii=dirname(__FILE__).'/../../../../framework/yii.php';
$config=dirname(__FILE__).'/../../../protected/backend/config/main.php';
defined('YII_DEBUG') or define('YII_DEBUG',true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
require_once($yii);
Yii::createWebApplication($config);
$db = Yii::app()->db;

$sql = "select id,provinceid,province_name from t_adoption_orphanage_address";
$ret = $db->createCommand($sql)->queryAll();
foreach($ret as $v){
  $id = $v['id'];
  $provinceid = $v['provinceid']; 

  $province = Province::model()->findByAttributes(array('id'=>$provinceid));
  $province_name = $province->name;

  if(empty($v['province_name'])){
    $sql2 = "update t_adoption_orphanage_address set province_name='$province_name' where id='$id'";
    $db->createCommand($sql2)->query();
    echo $sql2."\n";
  }
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
