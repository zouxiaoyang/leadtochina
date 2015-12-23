<?php
if(!$_SERVER['SSH_CONNECTION']) exit;
$yii=dirname(__FILE__).'/../../../../framework/yii.php';
$config=dirname(__FILE__).'/../../../protected/backend/config/main.php';
defined('YII_DEBUG') or define('YII_DEBUG',true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
require_once($yii);
Yii::createWebApplication($config);
$db = Yii::app()->db;

$list = Cruise::model()->findAll(array('select'=>'ufile,id'));
foreach($list as $v){
  $pic = '../../../../uploads/cityTours/'.$v->ufile;
  if(is_file($pic)){
    $save_file = '../../../images/uploads/cruise/'.$v->ufile;
    system("cp $pic $save_file");
    echo 'Yes--'.$v->id.'--'.$pic."\n";
  }else{
    echo 'No--'.$v->id."\n";
  }
}
