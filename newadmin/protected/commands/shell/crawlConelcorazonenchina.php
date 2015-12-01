<?php
if(!$_SERVER['SSH_CONNECTION']) exit;
$yii=dirname(__FILE__).'/../../../../framework/yii.php';
$config=dirname(__FILE__).'/../../../protected/backend/config/main.php';
defined('YII_DEBUG') or define('YII_DEBUG',true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
require_once($yii);
Yii::createWebApplication($config);
$db = Yii::app()->db;


require('phpQuery/phpQuery.php');
#require('Snoopy.class.php');
#require('function.php');

$url_array = array(
  'Anhui','Beijing','Chongqing','Fujian',
  'Gansu','Guangdong','Guangxi','Guizhou',
  'Hainan','Hebei','Heilongjiang','Henan',
  'Hubei','Hunan','Inner Mongolia','Inner Mongolia',
  'Jiangxi','Jilin','Liaoning','Ningxia',
  'Qinghai','Shaanxi','Shandong','Shanghai',
  'Shanxi','Sichuan','Tianjin','Xinjiang',
  'Yunnan','Zhejiang'
);

$url = "http://conelcorazonenchina.blogspot.com/search/label/"; 
foreach($url_array as $v){

  $url2 = $url.$v;
  //$url2 = "http://www.baidu.com";
  //$file = change_proxy($url2);
  $file = file_get_contents($url2);
  echo $url2."\n";
  $doc = phpQuery::newDocumentHTML($file);
  $img = pq(".post-body")->find("img");
  var_dump($img->attr("src"));
 // var_dump($img->html());
  exit;
   
 
}
