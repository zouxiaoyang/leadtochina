<?php
if(!$_SERVER['SSH_CONNECTION']) exit;
$yii=dirname(__FILE__).'/../../../../framework/yii.php';
$config=dirname(__FILE__).'/../../../protected/backend/config/main.php';
defined('YII_DEBUG') or define('YII_DEBUG',true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
require_once($yii);
Yii::createWebApplication($config);
$db = Yii::app()->db;

$list = Cruisepic::model()->findAll(array('select'=>'pic_path,id'));
foreach($list as $v){
  $pic = '../../../../uploads/hotel/'.$v->pic_path;
  if(is_file($pic)){
    $save_file = '../../../images/uploads/cruise/'.$v->pic_path;
    system("cp $pic $save_file");
    echo 'Yes--'.$v->id.'--'.$pic."\n";
  }else{
    echo 'No--'.$v->id."\n";
  }
}
