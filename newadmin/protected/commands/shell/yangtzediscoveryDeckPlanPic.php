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
//require('Snoopy.class.php');
require('function.php');


$url_array = array(
 //44 => 'http://www.yangtzediscovery.com/president_8/president-8-images.htm',
 //29 => 'http://www.yangtzediscovery.com/president_1/presidentno_1-images.htm',  
 //46 => 'http://www.yangtzediscovery.com/president_7/president-7-images.htm',
 //47 => 'http://www.yangtzediscovery.com/president-prime/president-prime-images.htm',
 /*
 36 => 'http://www.yangtzediscovery.com/splendid-china/splendid-china-images.htm',
 19 => 'http://www.yangtzediscovery.com/viking-century-sky/viking-century-sky-images.htm',
 48 => 'http://www.yangtzediscovery.com/viking-century-legend/viking-century-legend-images.htm',
 49 => 'http://www.yangtzediscovery.com/viking-century-sun/viking-century-sun-images.htm',
 50 => 'http://www.yangtzediscovery.com/viking-century-paragon/viking-century-paragon-images.htm',
 13 => 'http://www.yangtzediscovery.com/victoria-lianna/victoria-Lianna-images.htm',
 15 => 'http://www.yangtzediscovery.com/victoria-grace/victoria-grace-images.htm',
 16 => 'http://www.yangtzediscovery.com/victoria-selina/victoria-Selina-images.htm',
 17 => 'http://www.yangtzediscovery.com/victoria-sophia/victoria-sophia-images.htm',
 38 => 'http://www.yangtzediscovery.com/victoria-anna/victoria-anna-images.htm',
 39 => 'http://www.yangtzediscovery.com/victoria-jenna/victoria-jenna-images.htm',
 40 => 'http://www.yangtzediscovery.com/victoria-katarina/victoria-katarina-images.htm',
 63 => 'http://www.yangtzediscovery.com/victoria-sophia/victoria-sophia-images.htm',
 45 => 'http://www.yangtzediscovery.com/yangtze-gold_1/yangtze-gold1-images.htm',
 51 => 'http://www.yangtzediscovery.com/yangtze-gold_2/yangtze-gold2-images.htm',
 55 => 'http://www.yangtzediscovery.com/yangtze-gold_3/yangtze-gold3-images.htm',
 56 => 'http://www.yangtzediscovery.com/yangtze-gold_5/yangtze-gold5-images.htm',
 57 => 'http://www.yangtzediscovery.com/yangtze-gold_6/yangtze-gold6-images.htm',
 58 => 'http://www.yangtzediscovery.com/yangtze-gold_7/yangtze-gold7-images.htm',
 59 => 'http://www.yangtzediscovery.com/yangtze-gold_8/yangtze-gold8-images.htm',
 11 => 'http://www.yangtzediscovery.com/blue-whale/blue-whale-images.htm',
 22 => 'http://www.yangtzediscovery.com/yangtze_1/yangtze_1-images.htm',
 52 => 'http://www.yangtzediscovery.com/yangtze_2/yangtze_2-images.htm',
 53 => 'http://www.yangtzediscovery.com/victoria_3/victoria-no_3-images.htm',
 30 => 'http://www.yangtzediscovery.com/yangtze-explorer/yangtze-explorer-images.htm',
  */
);


/*
foreach($url_array as $cruiseid=>$url){

  //$file = change_proxy($v);
  $file = file_get_contents($url);
  echo "-------cruiseid--:".$cruiseid."--".$url."\n";
  //echo $file;
  $doc = phpQuery::newDocumentHTML($file);
   
  foreach(pq("table")->find("div") as $k=>$v){
    //if(pq($v)->find("a")->length==1 && pq($v)->find("a")->find("img")) {
     $img_url = pq($v)->find("a")->attr("href");
    if(pq($v)->find("img")->length == 1 && strpos($img_url,'cruise-ships-pictures-htmls') !== false){

      $img_url = "http://www.yangtzediscovery.com".str_replace("..","", $img_url);
      $img_alt = mysql_real_escape_string(trim(strip_tags(pq($v)->html())));
     echo $img_url."\n";
     echo $img_alt."\n";
      $sql = "insert into t_crawl_cruisepic(cruiseid, img_url,title,belong_url) value($cruiseid, '$img_url','$img_alt','$url')";
      $db->createCommand($sql)->query();
      echo $sql."\n";
    }
    $img_url = " ";
  }
  echo "==================="."\n";

  //exit;
}
 */


$sql = "select * from t_crawl_cruisepic where flag=0 limit 50";
$cruisepic_arr = $db->createCommand($sql)->queryAll();

foreach($cruisepic_arr as $cruise){
  $id = $cruise['id'];
  $url = $cruise['img_url'];
  $title = mysql_real_escape_string($cruise['title']);
  $cruiseid = $cruise['cruiseid'];

  echo "--cruiseid:".$cruiseid."--id:".$id."--url:".$url."\n";

  $file = file_get_contents($url);
  $doc = phpQuery::newDocumentHTML($file);
  
  $access = 0;
  foreach(pq("table")->find("img") as $v){
    $img_src = pq($v)->attr("src");
    if(strpos($img_src,"cruise-ships-pictures") !== false){
      $access = 1;
      $img_url = "http://www.yangtzediscovery.com".str_replace("..","", $img_src);
      echo $img_url."\n";
      $pathinfo = pathinfo($img_url);
      $dir = $cruiseid.'/'.uniqid().".".$pathinfo['extension'];
      if(!is_dir($cruiseid)){
        mkdir($cruiseid); 
      }
      system("wget -qO $dir $img_url");
      $dir = mysql_real_escape_string($dir);
      $sql = "insert into t_cruisepic(cruiseid,pic_alt,pic_dir,pic_path,state) values('$cruiseid','$title','','$dir',3);";
      $db->createCommand($sql)->query();
      echo $sql."\n";
    }
  }

  if($access == 1){
    $sql = "update t_crawl_cruisepic set flag=1 where id='$id'"; 
    $db->createCommand($sql)->query();
    echo $sql."\n";
  }
}

