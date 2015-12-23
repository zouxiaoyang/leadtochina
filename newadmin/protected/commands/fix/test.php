<?php
if(!$_SERVER['SSH_CONNECTION']) exit;
$yii=dirname(__FILE__).'/../../../../framework/yii.php';
$config=dirname(__FILE__).'/../../../protected/backend/config/main.php';
defined('YII_DEBUG') or define('YII_DEBUG',true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
require_once($yii);
Yii::createWebApplication($config);
$db = Yii::app()->db;

$list = ToursPackage::model()->findAllByPk(array(838,840,841,842,843,844));

foreach($list as $v){
  echo $v->url();
  echo "\n";
}
