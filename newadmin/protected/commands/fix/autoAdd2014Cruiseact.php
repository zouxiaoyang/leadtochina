<?php
if(!$_SERVER['SSH_CONNECTION']) exit;
$yii=dirname(__FILE__).'/../../../../framework/yii.php';
$config=dirname(__FILE__).'/../../../protected/backend/config/main.php';
defined('YII_DEBUG') or define('YII_DEBUG',true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
require_once($yii);
Yii::createWebApplication($config);
$db = Yii::app()->db;

$cruise_arr = array(
  '15' => array(
    'name' => 'Victoria Grace', 
    'down' => 5,
    'up' => 1,
   ),
  /*
  '11'=>array(
    'name' => 'Blue Whale', 
    'down'=>1,
    'up'=>4,
   ),
   '13'=>array(
    'name' => 'Victoria Lianna', 
    'down'=>7,
    'up'=>3,
   ),
   '16'=>array(
    'name' => 'Victoria Selina', 
    'down'=>4,
    'up'=>7,
   ),
   '17'=>array(
    'name' => 'Victoria Prince', 
    'down'=>6,
    'up'=>2,
   ),
   '19'=>array(
    'name' => 'Century Sky', 
    'down'=>4,
    'up'=>7,
   ),
   '22'=>array(
    'name' => 'Yangtze NO.1', 
    'down'=>6,
    'up'=>2,
   ),
   '23'=>array(
    'name' => 'Victoria Empress', 
    'down'=>5,
    'up'=>1,
   ),
   '29'=>array(
    'name' => 'President NO.1', 
    'down'=>7,
    'up'=>3,
   ),
   '30'=>array(
    'name' => 'Yangtze Explorer', 
    'down'=>4,
    'up'=>7,
   ),
   '38'=>array(
    'name' => 'Victoria Anna', 
    'down'=>2,
    'up'=>5,
   ),
   '39'=>array(
    'name' => 'Victoria Jenna', 
    'down'=>1,
    'up'=>4,
   ),
   '40'=>array(
    'name' => 'Victoria Katarina', 
    'down'=>3,
    'up'=>6,
   ),
   '44'=>array(
    'name' => 'President NO.8', 
    'down'=>5,
    'up'=>1,
   ),
   '45'=>array(
    'name' => 'Yangtze Gold 1', 
    'down'=>1,
    'up'=>4,
   ),
   '46'=>array(
    'name' => 'President NO.7', 
    'down'=>3,
    'up'=>6,
   ),
   '47'=>array(
    'name' => 'President Prime', 
    'down'=>2,
    'up'=>5,
   ),
   '48'=>array(
    'name' => 'Century Legend', 
    'down'=>6,
    'up'=>2,
   ),
   '49'=>array(
    'name' => 'Century Sun', 
    'down'=>5,
    'up'=>1,
   ),
   '50'=>array(
    'name' => 'Century Paragon', 
    'down'=>2,
    'up'=>5,
   ),
   '51'=>array(
    'name' => 'Yangtze Gold 2', 
    'down'=>2,
    'up'=>5,
   ),
   '52'=>array(
    'name' => 'M.S.Yangtze 2', 
    'down'=>4,
    'up'=>7,
   ),
   '53'=>array(
    'name' => 'M.S.Victoria 5', 
    'down'=>5,
    'up'=>1,
   ),
   '55'=>array(
    'name' => 'Yangtze Gold 3', 
    'down'=>3,
    'up'=>6,
   ),
   '56'=>array(
    'name' => 'Yangtze Gold 5', 
    'down'=>5,
    'up'=>1,
   ),
   '57'=>array(
    'name' => 'Yangtze Gold 6', 
    'down'=>6,
    'up'=>2,
   ),
   '58'=>array(
    'name' => 'Yangtze Gold 7', 
    'down'=>7,
    'up'=>3,
   ),
   '59'=>array(
    'name' => 'Yangtze Gold 8', 
    'down'=>4,
    'up'=>7,
   ),
    */
   
);

for($i=1;$i<=12;$i++){
  $date = date("2014-$i-1");
  $current_month_days_num = date('t', strtotime($date));
  for($j=1; $j<=$current_month_days_num; $j++){
    $date2 = date("2014-$i-$j");
    $current_weekday = date('N', strtotime($date2));
    $year = 2014;
    $month = $i;
    $days = $j;
    $sql = "";
    echo $date2."--weekdays:".$current_weekday."\n";
    
    foreach($cruise_arr as $k=>$v){
      $cruise_id = $k;
      $cruise_name = $v['name'];
      $up = $v['up'];
      $down = $v['down'];
      if($current_weekday == $up){
        $sql = "insert into t_cruiseact(cruiseid,cruise_name,cruise_date,year,month,days,upOrdown,flag) values($cruise_id,'$cruise_name', '$date2', $year,$month,$days, 0, 1)";     
        $db->createCommand($sql)->query();
        echo 'up--:'.$sql."\n";
      }
      if($current_weekday == $down){
        $sql = "insert into t_cruiseact(cruiseid,cruise_name,cruise_date,year,month,days,upOrdown,flag) values($cruise_id,'$cruise_name', '$date2', $year,$month,$days, 1, 1)";     
        $db->createCommand($sql)->query();
        echo 'down--:'.$sql."\n";
      }
    
    }
    
  }

}

/*
$sql = "select * from t_cruiseact";
$ret = $db->createCommand($sql)->query();
print_r($ret);
foreach($ret as $v){
  print_r($v);
  sleep(2);
}
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
