<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
ini_set("display_errors","On");
error_reporting(E_ALL);
require_once('checkMobile.php');
$is_mobile_request = is_mobile_request();
// $is_mobile_request?define('IS_MOBILE',true):define('IS_MOBILE',false);
if(isset($_GET['m'])&& $_GET['m']==1){
	define('IS_MOBILE',true);
}else{
	define('IS_MOBILE',false);
}
require_once($yii);
Yii::createWebApplication($config)->run();