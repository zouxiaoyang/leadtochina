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

$file = file_get_contents("http://www.lotustours.net/info/adoption/addresses.shtml");
$doc = phpQuery::newDocumentHTML($file);

$province_arr= array();
foreach(pq("#colCentre")->find("table")->find("tr") as $tr){
  foreach(pq($tr)->find("td") as $td){
    $province_arr[] = pq($td)->find("a")->html(); 
  }
}

foreach($province_arr as $province){

  $file = file_get_contents("http://www.lotustours.net/info/adoption/orphanageAddress/".$province.".html");
  $doc = phpQuery::newDocumentHTML($file);

  foreach(pq(".tbl_border")->find("table")->find("tr") as $k=>$tr){
    if($k==0) continue;
    foreach(pq($tr)->find("td") as $k2=>$td){
      $arr[$k2] = pq($td)->html();
    }
    $sql = "insert into t_adoption_orphanage_address(province_name,orphanage_name,address,postal_code,tel) values(\"$province\",\"$arr[0]\",\"$arr[1]\",\"$arr[2]\",\"$arr[3]\")";
    $db->createCommand($sql)->query();
    echo $sql."\n";
    echo "\n";
  }
}
  
