<?php
//echo $_SERVER['SCRIPT_FILENAME'];///data/htdocs/www/new/siteroute.php
//echo $_SERVER['SERVER_SIGNATURE'];//SERVER_SIGNATURE这个没有值
//echo $_SERVER['SCRIPT_NAME'];//   /siteroute.php包含当前脚本的路径。这在页面需要指向自己时非常有用。__FILE__ 包含当前文件的绝对路径和文件名（例如包含文件）。
//echo $_SERVER['REQUEST_URI'];// 输出了/index.php?option=com_chinaTours&Itemid=54

//if(strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'],"zh-cn")!==false){
//	exit;
//}


$req_url=$_SERVER['REQUEST_URI'];

if($_SERVER['REQUEST_URI']=="/tour/best-china-tours/"){

	include("./html/BestChinaTours.html");
	exit;

}

if($_SERVER['REQUEST_URI']=="/tour/seasonal-tour/"){

	include("./html/season.html");
	exit;

}
if($_SERVER['REQUEST_URI']=="/tour/cheap-china-tours/"){

	include("./html/cheap.html");
	exit;

}
$_REQUEST['define_cururl']=$req_url;
if(strpos($_SERVER['REQUEST_URI'],"?")!==false){
	if(strpos($_SERVER['REQUEST_URI'],"com_")===false){
	$_SERVER['REQUEST_URI']=substr($_SERVER['REQUEST_URI'],0,strpos($_SERVER['REQUEST_URI'],"?"));
	header("Location:{$_SERVER['REQUEST_URI']}");
	exit;
	}

}
$req_url=$_SERVER['REQUEST_URI'];
$temp_url=".".$_SERVER['REQUEST_URI'];
//假如是文件直接加载页面
if(is_file($temp_url)){

	//$rewirte_url=".".$_SERVER['REQUEST_URI'];

	require("$temp_url");
	exit;

}
if(empty($req_url)){

	include("index.php");
	exit;

}

include("configuration.php");


$route_config=new JConfig();
$route_localhost=$route_config->host;
$route_user=$route_config->user;
$route_pw=$route_config->password;

$link = mysql_connect($route_localhost,$route_user, $route_pw) or die('Could not connect: ' . mysql_error());

mysql_select_db('joomla') or die('Could not select database');

// 执行 SQL 查询



$url_path_array=explode("/",$_SERVER['REQUEST_URI']);

$url_count=count($url_path_array);
//var_dump($url_path_array);
//exit;

//china guide rewrite/
if($url_path_array[1]=="tour" AND $url_path_array[2]=="diytours.html"){
	$_SERVER['REQUEST_URI']="/index.php?option=com_diy&template=customize&view=customize5";
	$_REQUEST['option']="com_diy";
	$_REQUEST['template']="customize";
	$_REQUEST['view']="customize5";



	include("index.php");
	exit;	


}

if($url_path_array[1]=="tour" AND $url_path_array[2]=="cheap-china-tours"){
	$_SERVER['REQUEST_URI']="/index.php?option=com_cheapchinatour&view=index&Itemid=183";

	$_REQUEST['option']="com_cheapchinatour";
	$_REQUEST['view']="index";
	$_REQUEST['id']=$tempid;
	//$_REQUEST['cid']=11;
	$_REQUEST['Itemid']=183;

	include("index.php");
	exit;	

}

if($url_path_array[1]=="tour" AND $url_path_array[2]=="china-student-travel"){
	$_SERVER['REQUEST_URI']="/index.php?option=com_pgcategory&view=default&catid=584&Itemid=185";

	$_REQUEST['option']="com_pgcategory";
	$_REQUEST['view']="default";
	$_REQUEST['id']=$tempid;
	//$_REQUEST['cid']=11;
	$_REQUEST['catid']=584;
	$_REQUEST['Itemid']=185;

	include("index.php");
	exit;	

}
if($url_path_array[1]=="links.html"){
	$_SERVER['REQUEST_URI']="/index.php?option=com_links&Itemid=181";

	$_REQUEST['option']="com_links";

	//$_REQUEST['cid']=11;
	$_REQUEST['Itemid']=181;

	include("index.php");
	exit;	

}

if($url_path_array[1]=="blog"){
	$_SERVER['REQUEST_URI']="/index.php?option=com_content&view=frontpage&Itemid=148";

	$_REQUEST['option']="com_content";

	$_REQUEST['view']="frontpage";
	$_REQUEST['Itemid']=148;

	include("index.php");
	exit;	

}
if($url_path_array[1]=="china-maps"){
	$_SERVER['REQUEST_URI']="/index.php?option=com_maps&view=maps&Itemid=174";

	$_REQUEST['option']="com_maps";
	$_REQUEST['view']="maps";
	$_REQUEST['id']=$tempid;
	//$_REQUEST['cid']=11;
	$_REQUEST['Itemid']=174;

	include("index.php");
	exit;	

}

if($url_path_array[1]=="china-flight"){

	if(EMPTY($url_path_array[2])){
	
		$_SERVER['REQUEST_URI']="/index.php?option=com_flight&view=default&Itemid=73";
		$_REQUEST['option']="com_flight";
		
		$_REQUEST['view']="default";
		$_REQUEST['Itemid']=73;
		include("index.php");
		exit;	
	}
	
	}



if($url_path_array[1]=="yangtzecruise"){

	if(EMPTY($url_path_array[2])){

		include("./yangtze.php");

		exit;
	
		$_SERVER['REQUEST_URI']="/index.php?option=com_cruise&Itemid=66";
		$_REQUEST['option']="com_cruise";
		
		
		$_REQUEST['Itemid']=66;
		include("index.php");
		exit;	
	
	
	}





if($url_path_array[2]=="ships"){
		include("./yangtzed.php");

		exit;
		$_SERVER['REQUEST_URI']="/index.php?option=com_cruise&view=cruises&Itemid=66";
		$_REQUEST['option']="com_cruise";
		$_REQUEST['view']="cruises";
		
		$_REQUEST['Itemid']=66;
		include("index.php");
		exit;	

}

if($url_path_array[2]=="calendar.html"){

		$_SERVER['REQUEST_URI']="/index.php?option=com_cruise&view=cruisecalendar&Itemid=66";
		$_REQUEST['option']="com_cruise";
		$_REQUEST['view']="cruisecalendar";
		
		$_REQUEST['Itemid']=66;
		include("index.php");
		exit;	

}
	if(EMPTY($url_path_array[2])==false){
	
		$query = "SELECT id  FROM jos_cos_cruise WHERE url like '{$url_path_array[2]}'";

		mysql_query("SET NAMES 'utf8'",$link);

		$result = mysql_query($query,$link) or die('Query failed: ' . mysql_error());
		if($row=mysql_fetch_array($result)){

			$_SERVER['REQUEST_URI']="/index.php?option=com_cruise&view=seecruise&cid={$row['id']}&Itemid=66";
			$_REQUEST['option']="com_cruise";
			$_REQUEST['view']="seecruise";
			//$_REQUEST['sid']=14;
			$_REQUEST['cid']=$row['id'];
			$_REQUEST['Itemid']=66;
			mysql_free_result($result);
			include("index.php");
			exit;		
		
		
		}
		unset($row);		
	
	
	}



}





if($url_path_array[1]=="map" AND EMPTY($url_path_array[2])){
		$_SERVER['REQUEST_URI']="/index.php?option=com_maps&Itemid=172";
		$_REQUEST['option']="com_maps";
		
		
		$_REQUEST['Itemid']=172;
		include("index.php");
		exit;

}

if($url_path_array[1]=="map" AND $url_path_array[2]=="china-city-map"){
		$_SERVER['REQUEST_URI']="/index.php?option=com_maps&view=allcitymaps&Itemid=172";
		$_REQUEST['option']="com_maps";
		
		$_REQUEST['view']="allcitymaps";		
		$_REQUEST['Itemid']=172;
		include("index.php");
		exit;

}

if($url_path_array[1]=="map" AND $url_path_array[2]=="china-provincial-map"){
		$_SERVER['REQUEST_URI']="/index.php?option=com_maps&view=allprovincemaps&Itemid=172";
		$_REQUEST['option']="com_maps";
		
		$_REQUEST['view']="allprovincemaps";		
		$_REQUEST['Itemid']=172;
		include("index.php");
		exit;

}

if($url_path_array[1]=="custom-china-tour"){
		$_SERVER['REQUEST_URI']="/index.php?option=com_customize&Itemid=165";
		$_REQUEST['option']="com_customize";
		
		$temp_view=$_REQUEST['view'];
		if($temp_view=="stepone"){
		$_REQUEST['Itemid']=169;
		}else{
		$_REQUEST['Itemid']=165;
		}
		
		include("index.php");
		exit;

}
if($url_path_array[1]=="save-money-on-china-trip.html"){
		$_SERVER['REQUEST_URI']="/index.php?option=com_savemoney&Itemid=168";
		$_REQUEST['option']="com_savemoney";
		
		
		$_REQUEST['Itemid']=168;
		include("index.php");
		exit;

}
if($url_path_array[1]=="payment-guide" AND empty($url_path_array[2])){
		$_SERVER['REQUEST_URI']="/index.php?option=com_paypal&Itemid=167";
		$_REQUEST['option']="com_paypal";
		
		
		$_REQUEST['Itemid']=167;
		include("index.php");
		exit;

}

if($url_path_array[1]=="payment-guide" and $url_path_array[2]=="refund-policy.html"){
		$_SERVER['REQUEST_URI']="/index.php?option=com_content&view=article&id=1399&Itemid=141";
		$_REQUEST['option']="com_content";
		
		$_REQUEST['view']="article";
		$_REQUEST['id']=1399;
		$_REQUEST['Itemid']=141;
		include("index.php");
		exit;

}

if($url_path_array[1]=="climate" AND empty($url_path_array[2])){
	
	
		$_SERVER['REQUEST_URI']="/index.php?option=com_chinaweather&Itemid=164";
		$_REQUEST['option']="com_chinaweather";
		
		
		$_REQUEST['Itemid']=164;
		include("index.php");
		exit;
		
}



if(empty($url_path_array[1])==false AND empty($url_path_array[2])){
	
		$query = "SELECT id,title,section  FROM jos_categories WHERE alias like '{$url_path_array[1]}'";

		mysql_query("SET NAMES 'utf8'",$link);

		$result = mysql_query($query,$link) or die('Query failed: ' . mysql_error());
		if($row=mysql_fetch_array($result)){
			if($row['section']==7){
				$Itemid=163;
			
			}else{
				$Itemid=53;
			}
			$_SERVER['REQUEST_URI']="/index.php?option=com_content&view=category&id={$row['id']}&layout=default&Itemid={$Itemid}";
			$_REQUEST['option']="com_content";
			$_REQUEST['view']="category";
			//$_REQUEST['sid']=14;
			$_REQUEST['id']=$row['id'];
			$_REQUEST['Itemid']=$Itemid;
			mysql_free_result($result);
			include("index.php");
			exit;		
		
		
		}
		unset($row);

}



	$temp_view="";

if($url_path_array[1]=='embassy' AND empty($url_path_array[2])){
		switch($url_path_array[1]){
		
			case 'embassy':
				$temp_view="embassy";
				break;
			
	
		
		}
		if($temp_view!=''){
			$_SERVER['REQUEST_URI']="/index.php?option=com_traveltool&view={$temp_view}&Itemid=128";
			$_REQUEST['option']="com_traveltool";
			$_REQUEST['view']="embassy";
			//$_REQUEST['sid']=14;
			//$_REQUEST['cid']=11;
			$_REQUEST['Itemid']=128;
			
			include("index.php");
			exit;
		
		}
		}
		
if($url_path_array[1]=='embassy' AND empty($url_path_array[2])==false){

			$alias=explode(".",$url_path_array[2]);

			$query = "SELECT id  FROM jos_content WHERE alias like '{$alias[0]}'";

		mysql_query("SET NAMES 'utf8'",$link);

		$result = mysql_query($query,$link) or die('Query failed: ' . mysql_error());
		$row=mysql_fetch_array($result);

			$_SERVER['REQUEST_URI']="/index.php?option=com_content&view=embassy&id={$row['id']}&Itemid=128";

			$_REQUEST['option']="com_content";
			$_REQUEST['view']="embassy";
			$_REQUEST['id']=$row['id'];
			//$_REQUEST['cid']=11;
			$_REQUEST['Itemid']=128;
			
			include("index.php");
			exit;
}

if($url_path_array[1]=='travel-tools' AND empty($url_path_array[2])==false){

	if($url_path_array[2]=='china-visa.html'){
		
		$tempid=959;
	}
	if($url_path_array[2]=='table-manners.html'){
		
		$tempid=958;
	}
	if($url_path_array[2]=='area-zip-code.html'){
		
		$tempid=955;
	}
	if($url_path_array[2]=='money-issues.html'){
		
		$tempid=957;
	}
	if(empty($tempid)){
		$alias=explode(".",$url_path_array[2]);

		$query = "SELECT id  FROM jos_content WHERE alias like '{$alias[0]}' AND state=1";

		mysql_query("SET NAMES 'utf8'",$link);

		$result = mysql_query($query,$link) or die('Query failed: ' . mysql_error());


		if($row=mysql_fetch_array($result)){
		
			$tempid=$row['id'];
		}	
	
	}

	if(empty($tempid)==false){
	$_SERVER['REQUEST_URI']="/index.php?option=com_content&view=article&id={$tempid}&Itemid=162";

	$_REQUEST['option']="com_content";
	$_REQUEST['view']="article";
	$_REQUEST['id']=$tempid;
	//$_REQUEST['cid']=11;
	$_REQUEST['Itemid']=162;

	unset($tempid);
	include("index.php");
	exit;
	}


}



	if($url_path_array[1]=="things-to-do"){
		
		if(empty($url_path_array[2])){
			$_SERVER['REQUEST_URI']="/index.php?option=com_content&view=section&id=7&Itemid=163";
			$_REQUEST['option']="com_content";
			$_REQUEST['view']="section";
			$_REQUEST['id']=7;
			$_REQUEST['Itemid']=163;
			include("index.php");
			exit;
			
		}else{
		



		$alias=explode(".",$url_path_array[2]);

	if(empty($alias[0])==false){

		$query = "SELECT id,sectionid,catid  FROM jos_content WHERE alias like '{$alias[0]}'";

		mysql_query("SET NAMES 'utf8'",$link);

		$result = mysql_query($query,$link) or die('Query failed: ' . mysql_error());

		
		if($row = mysql_fetch_array($result, MYSQL_ASSOC)){
			mysql_free_result($result);


			$query1 = "SELECT title   FROM jos_categories WHERE id={$row['id']}";

			mysql_query("SET NAMES 'utf8'",$link);

			$result1 = mysql_query($query1,$link) or die('Query failed: ' . mysql_error());

			$row1 = mysql_fetch_array($result1, MYSQL_ASSOC);

			$_REQUEST['option']="com_content";
			$_REQUEST['view']="article";
			$_REQUEST['id']="{$row['id']}:".$alias[0];
			$_REQUEST['catid']=$row['catid'].":{$row1['title']}";


			$_SERVER['REQUEST_URI']="/index.php?option=com_content&view=article&id={$row['id']}:".$alias[0].'&catid='.$row['catid'].":{$row1['title']}&Itemid=163";
			$_REQUEST['Itemid']=163;



			mysql_free_result($result1);
			include("./index.php");
			exit;


		}else{





		
		Header( "Location: http://www.leadtochina.com/404.php?frontpage={$_REQUEST['define_cururl']}" );	
		exit;
		}
		
	}		
		
		}
			
	}







if($url_path_array[1]=='travel-tips' AND empty($url_path_array[2])==false){

		$alias=explode(".",$url_path_array[2]);

		$query = "SELECT id  FROM jos_content WHERE alias like '{$alias[0]}' AND state=1";

		mysql_query("SET NAMES 'utf8'",$link);

		$result = mysql_query($query,$link) or die('Query failed: ' . mysql_error());


		if($row=mysql_fetch_array($result)){

			$_SERVER['REQUEST_URI']="/index.php?option=com_content&view=article&id={$row['id']}&Itemid=161";

			$_REQUEST['option']="com_content";
			$_REQUEST['view']="article";
			$_REQUEST['id']=$row['id'];
			//$_REQUEST['cid']=11;
			$_REQUEST['Itemid']=161;
			mysql_free_result($result);
			include("index.php");
			exit;
			}else{
				echo "没有取到文章!";
				exit;
			}
}








//http://www.leadtochina.com/index.php?option=com_traveltool&view=embassy&Itemid=128	





		if($url_path_array[1]=="great-wall"){
		

		if(empty($url_path_array[2])){
			$_SERVER['REQUEST_URI']="/index.php?option=com_hotattraction&sid=14&cid=11&Itemid=159";
			$_REQUEST['option']="com_hotattraction";
			//$_REQUEST['view']="section";
			$_REQUEST['sid']=14;
			$_REQUEST['cid']=11;
			$_REQUEST['Itemid']=159;
			
			include("index.php");
			exit;
		}else{

		$alias=explode(".",$url_path_array[2]);


	if(empty($alias[0])==false){

		$query = "SELECT id  FROM jos_content WHERE alias like '{$alias[0]}'  AND state=1 AND sectionid=14";

		mysql_query("SET NAMES 'utf8'",$link);

		$result = mysql_query($query,$link) or die('Query failed: ' . mysql_error());

		
		if($row = mysql_fetch_array($result, MYSQL_ASSOC)){
			$_SERVER['REQUEST_URI']="/index.php?option=com_content&view=article&id={$row['id']}&Itemid=159";

			$_REQUEST['option']="com_content";
			$_REQUEST['view']="article";

			$_REQUEST['id']=$row['id'];
			$_REQUEST['sid']=14;
			$_REQUEST['Itemid']=159;
			mysql_free_result($result);
			include("index.php");
			exit;		
		
		}
		
		}		
	
		}		

		}


		if($url_path_array[1]=="yangtze-river"){
		
		
		if(empty($url_path_array[2])){

		$_SERVER['REQUEST_URI']="/index.php?option=com_hotattraction&sid=21&Itemid=159";
		$_REQUEST['option']="com_hotattraction";
		//$_REQUEST['view']="section";
		$_REQUEST['sid']=21;
		//$_REQUEST['cid']=11;
		$_REQUEST['Itemid']=159;
		
		include("index.php");
		exit;
		}ELSE{
		
		
		$alias=explode(".",$url_path_array[2]);


	if(empty($alias[0])==false){

		$query = "SELECT id  FROM jos_content WHERE alias like '{$alias[0]}'  AND state=1 AND sectionid=21";

		mysql_query("SET NAMES 'utf8'",$link);

		$result = mysql_query($query,$link) or die('Query failed: ' . mysql_error());

		
		if($row = mysql_fetch_array($result, MYSQL_ASSOC)){
			$_SERVER['REQUEST_URI']="/index.php?option=com_content&view=article&id={$row['id']}&Itemid=159";

			$_REQUEST['option']="com_content";
			$_REQUEST['view']="article";

			$_REQUEST['id']=$row['id'];
			$_REQUEST['sid']=21;
			$_REQUEST['Itemid']=159;
			mysql_free_result($result);
			include("index.php");
			exit;		
		
		}
		
		}		
		
		
		}		

		}


		if($url_path_array[1]=="potala-palace"){
		

		if(empty($url_path_array[2])){
		$_SERVER['REQUEST_URI']="/index.php?option=com_hotattraction&sid=22&Itemid=159";
		$_REQUEST['option']="com_hotattraction";
		//$_REQUEST['view']="section";
		$_REQUEST['sid']=22;
		//$_REQUEST['cid']=11;
		$_REQUEST['Itemid']=159;
		
		include("index.php");
		exit;
		}ELSE{
		
		$alias=explode(".",$url_path_array[2]);


	if(empty($alias[0])==false){

		$query = "SELECT id  FROM jos_content WHERE alias like '{$alias[0]}'  AND state=1 AND sectionid=22";

		mysql_query("SET NAMES 'utf8'",$link);

		$result = mysql_query($query,$link) or die('Query failed: ' . mysql_error());

		
		if($row = mysql_fetch_array($result, MYSQL_ASSOC)){
			$_SERVER['REQUEST_URI']="/index.php?option=com_content&view=article&id={$row['id']}&Itemid=159";

			$_REQUEST['option']="com_content";
			$_REQUEST['view']="article";

			$_REQUEST['id']=$row['id'];
			$_REQUEST['sid']=22;
			$_REQUEST['Itemid']=159;
			mysql_free_result($result);
			include("index.php");
			exit;		
		
		}
		
		}		
		
		}		

		}

		if($url_path_array[1]=="li-river"){
		

		if(empty($url_path_array[2])){
		$_SERVER['REQUEST_URI']="/index.php?option=com_hotattraction&sid=23&Itemid=159";
		$_REQUEST['option']="com_hotattraction";
		//$_REQUEST['view']="section";
		$_REQUEST['sid']=23;
		//$_REQUEST['cid']=11;
		$_REQUEST['Itemid']=159;
		
		include("index.php");
		exit;
		}ELSE{
		
		
		$alias=explode(".",$url_path_array[2]);


	if(empty($alias[0])==false){

		$query = "SELECT id  FROM jos_content WHERE alias like '{$alias[0]}'  AND state=1 AND sectionid=23";

		mysql_query("SET NAMES 'utf8'",$link);

		$result = mysql_query($query,$link) or die('Query failed: ' . mysql_error());

		
		if($row = mysql_fetch_array($result, MYSQL_ASSOC)){
			$_SERVER['REQUEST_URI']="/index.php?option=com_content&view=article&id={$row['id']}&Itemid=159";

			$_REQUEST['option']="com_content";
			$_REQUEST['view']="article";

			$_REQUEST['id']=$row['id'];
			$_REQUEST['sid']=23;
			$_REQUEST['Itemid']=159;
			mysql_free_result($result);
			include("index.php");
			exit;		
		
		}
		
		}			
		
		
		}		

		}
		if($url_path_array[1]=="summer-palace"){
		
			
		if(empty($url_path_array[2])){
		$_SERVER['REQUEST_URI']="/index.php?option=com_hotattraction&sid=15&cid=11&Itemid=159";
		$_REQUEST['option']="com_hotattraction";
		//$_REQUEST['view']="section";
		$_REQUEST['sid']=15;
		$_REQUEST['cid']=11;
		$_REQUEST['Itemid']=159;
		
		include("index.php");
		exit;
		}ELSE{
		
		
		$alias=explode(".",$url_path_array[2]);


	if(empty($alias[0])==false){

		$query = "SELECT id  FROM jos_content WHERE alias like '{$alias[0]}'  AND state=1 AND sectionid=15";

		mysql_query("SET NAMES 'utf8'",$link);

		$result = mysql_query($query,$link) or die('Query failed: ' . mysql_error());

		
		if($row = mysql_fetch_array($result, MYSQL_ASSOC)){
			$_SERVER['REQUEST_URI']="/index.php?option=com_content&view=article&id={$row['id']}&Itemid=159";

			$_REQUEST['option']="com_content";
			$_REQUEST['view']="article";

			$_REQUEST['id']=$row['id'];
			$_REQUEST['sid']=15;
			$_REQUEST['Itemid']=159;
			mysql_free_result($result);
			include("index.php");
			exit;		
		
		}
		
		}		
		
		
		
		
		}		

		}
		if($url_path_array[1]=="silk-road"){
		
			
		if(empty($url_path_array[2])){
		$_SERVER['REQUEST_URI']="/index.php?option=com_hotattraction&sid=19&cid=0&Itemid=159";
		$_REQUEST['option']="com_hotattraction";
		//$_REQUEST['view']="section";
		$_REQUEST['sid']=19;
		$_REQUEST['cid']=0;
		$_REQUEST['Itemid']=159;
		
		include("index.php");
		exit;
		}ELSE{
		
		
		$alias=explode(".",$url_path_array[2]);


	if(empty($alias[0])==false){

		$query = "SELECT id  FROM jos_content WHERE alias like '{$alias[0]}'  AND state=1 AND sectionid=19";

		mysql_query("SET NAMES 'utf8'",$link);

		$result = mysql_query($query,$link) or die('Query failed: ' . mysql_error());

		
		if($row = mysql_fetch_array($result, MYSQL_ASSOC)){
			$_SERVER['REQUEST_URI']="/index.php?option=com_content&view=article&id={$row['id']}&Itemid=159";

			$_REQUEST['option']="com_content";
			$_REQUEST['view']="article";

			$_REQUEST['id']=$row['id'];
			$_REQUEST['sid']=19;
			$_REQUEST['Itemid']=159;
			mysql_free_result($result);
			include("index.php");
			exit;		
		
		}
		
		}		
		
		
		
		
		
		}		

		}

		if($url_path_array[1]=="forbidden-city"){
			
		
			
		if(empty($url_path_array[2])){
		$_SERVER['REQUEST_URI']="/index.php?option=com_hotattraction&sid=16&cid=11&Itemid=159";
		$_REQUEST['option']="com_hotattraction";
		//$_REQUEST['view']="section";
		$_REQUEST['sid']=16;
		$_REQUEST['cid']=11;
		$_REQUEST['Itemid']=159;
		
		include("index.php");
		exit;
		}ELSE{
		
		
		$alias=explode(".",$url_path_array[2]);


	if(empty($alias[0])==false){

		$query = "SELECT id  FROM jos_content WHERE alias like '{$alias[0]}'  AND state=1 AND sectionid=16";

		mysql_query("SET NAMES 'utf8'",$link);

		$result = mysql_query($query,$link) or die('Query failed: ' . mysql_error());

		
		if($row = mysql_fetch_array($result, MYSQL_ASSOC)){
			$_SERVER['REQUEST_URI']="/index.php?option=com_content&view=article&id={$row['id']}&Itemid=159";

			$_REQUEST['option']="com_content";
			$_REQUEST['view']="article";

			$_REQUEST['id']=$row['id'];
			$_REQUEST['sid']=16;
			$_REQUEST['Itemid']=159;
			mysql_free_result($result);
			include("index.php");
			exit;		
		
		}
		
		}			
		
		
		
		
		
		}		

		}

		if($url_path_array[1]=="tiananmen-square"){
		
			
		if(empty($url_path_array[2])){
		$_SERVER['REQUEST_URI']="/index.php?option=com_hotattraction&sid=17&cid=11&Itemid=159";
		$_REQUEST['option']="com_hotattraction";
		//$_REQUEST['view']="section";
		$_REQUEST['sid']=17;
		$_REQUEST['cid']=11;
		$_REQUEST['Itemid']=159;
		
		include("index.php");
		exit;
		}ELSE{
		
		
		$alias=explode(".",$url_path_array[2]);


	if(empty($alias[0])==false){

		$query = "SELECT id  FROM jos_content WHERE alias like '{$alias[0]}'  AND state=1 AND sectionid=17";

		mysql_query("SET NAMES 'utf8'",$link);

		$result = mysql_query($query,$link) or die('Query failed: ' . mysql_error());

		
		if($row = mysql_fetch_array($result, MYSQL_ASSOC)){
			$_SERVER['REQUEST_URI']="/index.php?option=com_content&view=article&id={$row['id']}&Itemid=159";

			$_REQUEST['option']="com_content";
			$_REQUEST['view']="article";

			$_REQUEST['id']=$row['id'];
			$_REQUEST['sid']=17;
			$_REQUEST['Itemid']=159;
			mysql_free_result($result);
			include("index.php");
			exit;		
		
		}
		
		}		
		
		
		
		
		
		}		

		}
		if($url_path_array[1]=="terra-cotta-warriors"){
		
			
		if(empty($url_path_array[2])){
		$_SERVER['REQUEST_URI']="/index.php?option=com_hotattraction&sid=18&cid=180&Itemid=159";
		$_REQUEST['option']="com_hotattraction";
		//$_REQUEST['view']="section";
		$_REQUEST['sid']=18;
		$_REQUEST['cid']=180;
		$_REQUEST['Itemid']=159;
		
		include("index.php");
		exit;
		}ELSE{
		
		
		$alias=explode(".",$url_path_array[2]);


	if(empty($alias[0])==false){

		$query = "SELECT id  FROM jos_content WHERE alias like '{$alias[0]}'  AND state=1 AND sectionid=18";

		mysql_query("SET NAMES 'utf8'",$link);

		$result = mysql_query($query,$link) or die('Query failed: ' . mysql_error());

		
		if($row = mysql_fetch_array($result, MYSQL_ASSOC)){
			$_SERVER['REQUEST_URI']="/index.php?option=com_content&view=article&id={$row['id']}&Itemid=159";

			$_REQUEST['option']="com_content";
			$_REQUEST['view']="article";

			$_REQUEST['id']=$row['id'];
			$_REQUEST['sid']=18;
			$_REQUEST['Itemid']=159;
			mysql_free_result($result);
			include("index.php");
			exit;		
		
		}
		
		}		
		
		
		
		
		}		

		}		
		
		
		if($url_path_array[1]=="west-lake"){
		
			
		if(empty($url_path_array[2])){
		$_SERVER['REQUEST_URI']="/index.php?option=com_hotattraction&sid=20&cid=129&Itemid=159";
		$_REQUEST['option']="com_hotattraction";
		//$_REQUEST['view']="section";
		$_REQUEST['sid']=20;
		$_REQUEST['cid']=129;
		$_REQUEST['Itemid']=159;
		
		include("index.php");
		exit;
		}ELSE{
		
		$alias=explode(".",$url_path_array[2]);


	if(empty($alias[0])==false){

		$query = "SELECT id  FROM jos_content WHERE alias like '{$alias[0]}'  AND state=1 AND sectionid=20";

		mysql_query("SET NAMES 'utf8'",$link);

		$result = mysql_query($query,$link) or die('Query failed: ' . mysql_error());

		
		if($row = mysql_fetch_array($result, MYSQL_ASSOC)){
			$_SERVER['REQUEST_URI']="/index.php?option=com_content&view=article&id={$row['id']}&Itemid=159";

			$_REQUEST['option']="com_content";
			$_REQUEST['view']="article";

			$_REQUEST['id']=$row['id'];
			$_REQUEST['sid']=20;
			$_REQUEST['Itemid']=159;
			mysql_free_result($result);
			include("index.php");
			exit;		
		
		}
		
		}			
		
		
		
		}		

		}








$provine_array=array("henan"=>4,"hebei"=>5,"guangxi"=>6,"hubei"=>7,"hunan"=>8,"guizhou"=>9,"sichuan"=>10,"qinghai"=>11,"shanxi"=>12,"yunnan"=>14,"tibet"=>15,"xinjiang"=>16,"guangdong"=>17,"fujian"=>18,"zhejiang"=>19,"jiangsu"=>20,"anhui"=>21,"heilongjiang"=>22,"jilin"=>23,"shandong"=>24,"ningxia"=>25,"gansu"=>27,"shaanxi"=>30,"innermongolia"=>33,"liaoning"=>34,"jiangxi"=>35,"hainan"=>36);


$temp_index=$url_path_array[1];




if(empty($provine_array[$temp_index])==false AND empty($url_path_array[2])){


	$_SERVER['REQUEST_URI']="/index.php?option=com_province&pid={$provine_array[$temp_index]}&Itemid=158";
	$_REQUEST['option']="com_province";
	$_REQUEST['pid']=$provine_array[$temp_index];
	
	$_REQUEST['Itemid']=158;
	include("index.php");
	exit;

}

if(empty($provine_array[$temp_index])==false AND $url_path_array[2]=="map.html"){


	$_SERVER['REQUEST_URI']="/index.php?option=com_maps&view=provincemaps&pid={$provine_array[$temp_index]}&Itemid=174";
	$_REQUEST['option']="com_maps";
	$_REQUEST['pid']=$provine_array[$temp_index];
	$_REQUEST['view']="provincemaps";	
	$_REQUEST['Itemid']=174;
	include("index.php");
	exit;

}


unset($catid);
if(empty($provine_array[$temp_index])==false AND empty($url_path_array[2])==false){
	switch($url_path_array[2]){
		case "food.html":
			$sectionid=24;
			$catid=542;
			break;
		case "facts.html":
			$sectionid=24;
			$catid=541;
			break;
		case "climate.html":
			$sectionid=24;
			$catid=539;
			break;
		case "transportation.html":
			$sectionid=24;
			$catid=540;
			break;

	}
	if(isset($catid)){
		$pid=$provine_array[$temp_index];
		$rou_res=mysql_query("SELECT id FROM jos_content WHERE sectionid=24 AND catid=$catid AND provinceid=$pid");
		$rou_row=mysql_fetch_array($rou_res);
		$_SERVER['REQUEST_URI']="/index.php?option=com_content&view=article&id={$rou_row['id']}&Itemid=158";
		$_REQUEST['option']="com_content";
		$_REQUEST['id']=$rou_row['id'];
		$_REQUEST['pid']=$pid;
		$_REQUEST['view']='article';	
		$_REQUEST['Itemid']=158;
		include("index.php");
		exit;		
	
	}
}






$city_array=array("hefei"=>1,"tianjin"=>16,"luoyang"=>3,"changdu"=>245,"wuyuan"=>241,"wuzhen"=>217,"foshan"=>233,"chaozhou"=>232,"zhangjiajie"=>28,"changsha"=>29,"kaifeng"=>31,"guilin"=>22,"shenyang"=>203,"wuhan"=>26,"qinhuangdao"=>49,"beijing"=>11,"baoding"=>51,"jinan"=>229,"nanning"=>53,"liuzhou"=>54,"wuzhou"=>56,"baise"=>57,"xiangfan"=>58,"quanzhou"=>231,"suzhou"=>230,""=>227,"yangshuo"=>209,"chengde"=>210,"zhengzhou"=>211,"yichang"=>212,"guiyang"=>75,"zunyi"=>76,"tongren"=>77,"anshun"=>78,""=>228,"kaili"=>81,"chengdu"=>82,"mianyang"=>83,"leshan"=>86,"xining"=>88,"jingzhou"=>253,"shiyan"=>254,"golmud"=>93,"taiyuan"=>94,"datong"=>95,"pingyao"=>96,"chongqing"=>97,"kunming"=>98,"handan"=>250,"anyang"=>251,"dali"=>102,"shanghai"=>14,"yuxi"=>104,"lijiang"=>105,"xishuangbanna"=>106,"dengfeng"=>252,"lhasa"=>108,"shigatse"=>109,"nyingchi"=>110,"shijiazhuang"=>249,"urumqi"=>112,"kelamayi"=>113,"turpan"=>114,"kashgar"=>115,"guangzhou"=>116,"shenzhen"=>117,"zhuhai"=>118,"shantou"=>119,"zhaoxing"=>248,"dongguan"=>122,"zhongshan"=>123,"fuzhou"=>124,"xiamen"=>125,"jiuzhaigou"=>213,"taipei"=>214,"hangzhou"=>129,"naqu"=>246,"tengchong"=>247,"ningbo"=>133,"wenzhou"=>134,"shaoxing"=>135,"yiwu"=>136,"zhoushan"=>137,"nanjing"=>138,"wuxi"=>139,"xuzhou"=>140,"guyuan"=>242,"suzhou"=>142,"zhongwei"=>243,"yangzhou"=>145,"weifang"=>244,"huangshan"=>147,"wuhu"=>149,""=>225,"dalian"=>226,"harbin"=>153,""=>224,""=>223,"changchun"=>157,"jilin"=>158,"taizhong"=>215,"qingdao"=>162,"tainan"=>216,"yantai"=>164,"taian"=>165,"weihai"=>166,"yinchuan"=>167,"haikou"=>204,"hohhot"=>205,"hongkong"=>172,"lanzhou"=>173,"tianshui"=>174,"jiayuguan"=>175,"jiuquan"=>176,"macau"=>177,"taiwan"=>178,"xianyang"=>179,"xian"=>180,"nanchang"=>202,"yan'an"=>182,"jingdezhen"=>240,"tonghua"=>239,"fenghuang"=>238,"hezhou"=>237,"beihai"=>236,"sanjiang"=>235,"zhaoqing"=>234,"sanya"=>198,"dunhuang"=>199,"dujiangyan"=>200,"guanghan"=>201,"yixing"=>256,"zhenjiang"=>257,"zhouzhuang"=>258,"baotou"=>259,"erdos"=>260,"hulun-buir"=>261,"manzhouli"=>262,"kangding"=>263,"leshan"=>264,"hetian"=>265,"kanas"=>266,"kuqa"=>267,"korla"=>268,"haining"=>269,"jiaxing"=>270);




if(empty($city_array[$temp_index])==false AND $url_path_array[2]=="map.html"){
			

			$_SERVER['REQUEST_URI']="/index.php?option=com_maps&view=citymaps&cid={$city_array[$temp_index]}&Itemid=173";
			$_REQUEST['option']="com_maps";
			$_REQUEST['cid']=$city_array[$temp_index];
			$_REQUEST['view']="citymaps";
			$_REQUEST['Itemid']=173;
			include("index.php");
			exit;


}




if(empty($city_array[$temp_index])==false AND empty($url_path_array[2])){

			$_SERVER['REQUEST_URI']="/index.php?option=com_city&cid={$city_array[$temp_index]}&Itemid=153";
			$_REQUEST['option']="com_city";
			$_REQUEST['cid']=$city_array[$temp_index];
			
			$_REQUEST['Itemid']=153;
			include("index.php");
			exit;


}
if(empty($city_array[$temp_index])==false AND empty($url_path_array[2])==false){
	switch($url_path_array[2]){
		case "food-&-restaurants.html":
			$template_view="foodrestaurants";
			break;
		case "nightlife.html":
			$template_view="nightlife";
			break;
		case "shopping.html":
			$template_view="shopping";
			break;	
		case "attractions.html":
			$template_view="attractions";
			break;	
		case "facts.html":
			$template_view="fats";
			break;
		case "travel-tips.html":
			$template_view="traveltips";
			break;
		case "climate.html":
			$template_view="climate";
			break;
		case "transportations.html":
			$template_view="transportations";
			break;

	}




	if(isset($template_view)){
	
		$_SERVER['REQUEST_URI']="/index.php?option=com_city&view={$template_view}&cid={$city_array[$temp_index]}&Itemid=153";
		$_REQUEST['option']="com_city";
		$_REQUEST['cid']=$city_array[$temp_index];
		$_REQUEST['view']=$template_view;	
		$_REQUEST['Itemid']=153;
		include("index.php");
		exit;		
	
	}
}
if(empty($city_array[$temp_index])==false AND $url_path_array[2]=="attraction"){



		$rou_res=mysql_query("SELECT id FROM jos_cos_scenery WHERE url LIKE '".addslashes($req_url)."'");
		$rou_row=mysql_fetch_array($rou_res);	

		$_SERVER['REQUEST_URI']="/index.php?option=com_scenery&cid={$rou_row['id']}&Itemid=155";
		$_REQUEST['option']="com_scenery";
		//$_REQUEST['view']="section";
		$_REQUEST['cid']=$rou_row['id'];

		$_REQUEST['Itemid']=155;
		mysql_free_result($rou_res);
		include("index.php");
		exit;			

}






	if($url_path_array[1]=="travel-news"){
		
		
			$_SERVER['REQUEST_URI']="/index.php?option=com_content&view=section&id=1&Itemid=53";
			$_REQUEST['option']="com_content";
			$_REQUEST['view']="section";
			$_REQUEST['id']=1;
			$_REQUEST['Itemid']=53;
			include("index.php");
			exit;
			
	}	

	if($url_path_array[1]=="feedback"){
		
			if(empty($url_path_array[2])){
				$_SERVER['REQUEST_URI']="/index.php?option=com_feedback&Itemid=82";
				$_REQUEST['option']="com_feedback";

				$_REQUEST['Itemid']=82;
				include("index.php");
				exit;
			}else{
			
				$rou_res=mysql_query("SELECT id FROM jos_cos_feedback WHERE url LIKE '".addslashes($req_url)."'");
				$rou_row=mysql_fetch_array($rou_res);
				$_SERVER['REQUEST_URI']="/index.php?option=com_feedback&task=see&id={$rou_row['id']}&Itemid=150";
				$_REQUEST['option']="com_feedback";
				//$_REQUEST['view']="section";
				$_REQUEST['id']=$rou_row['id'];
				$_REQUEST['task']='see';
				$_REQUEST['Itemid']=150;
				mysql_free_result($rou_res);
				include("index.php");
				exit;
			}
			
	}	

	if($url_path_array[1]=="hotel"){

		if(empty($url_path_array[2])){
		
			$_SERVER['REQUEST_URI']="/index.php?option=com_hotel&view=default&Itemid=69";
			$_REQUEST['option']="com_hotel";
			$_REQUEST['view']="default";
			//$_REQUEST['id']=1;
			$_REQUEST['Itemid']=69;
			include("index.php");
			exit;			
		
		}elseif($url_path_array[2]=="brand"){

			switch($url_path_array[3]){
				case "days-inn-hotels-and-suites":
					$_SERVER['REQUEST_URI']="/index.php?option=com_hotelbrand&view=default&brandid=258&Itemid=149";
					$_REQUEST['option']="com_hotelbrand";
					$_REQUEST['view']="default";
					$_REQUEST['brandid']=258;
					$_REQUEST['Itemid']=149;
					include("index.php");
					break;
				case "hyatt-hotels":
					$_SERVER['REQUEST_URI']="/index.php?option=com_hotelbrand&view=default&brandid=259&Itemid=149";
					$_REQUEST['option']="com_hotelbrand";
					$_REQUEST['view']="default";
					$_REQUEST['brandid']=259;
					$_REQUEST['Itemid']=149;
					include("index.php");
					break;
				case "marriott":
					$_SERVER['REQUEST_URI']="/index.php?option=com_hotelbrand&view=default&brandid=260&Itemid=149";
					$_REQUEST['option']="com_hotelbrand";
					$_REQUEST['view']="default";
					$_REQUEST['brandid']=260;
					$_REQUEST['Itemid']=149;
					include("index.php");
					break;					
				case "crowne-plaza-hotels":
					$_SERVER['REQUEST_URI']="/index.php?option=com_hotelbrand&view=default&brandid=261&Itemid=149";
					$_REQUEST['option']="com_hotelbrand";
					$_REQUEST['view']="default";
					$_REQUEST['brandid']=261;
					$_REQUEST['Itemid']=149;
					include("index.php");
					break;	
					
				case "shangri-la":
					$_SERVER['REQUEST_URI']="/index.php?option=com_hotelbrand&view=default&brandid=262&Itemid=149";
					$_REQUEST['option']="com_hotelbrand";
					$_REQUEST['view']="default";
					$_REQUEST['brandid']=262;
					$_REQUEST['Itemid']=149;
					include("index.php");
					break;

			}
			exit;
		
		}else{
		
			//$temp_filename=explode("",$url_path_array[2]);
			

			if(strpos($url_path_array[2],'hotels')!==false){

				//$db->setQuery("SELECT id FROM jos_cos_city WHERE name LIKE '".addslashes($temp_sec[0])."'");

				$temp_sec=explode("-",$url_path_array[2]);
				
				$city_res=mysql_query("SELECT id FROM jos_cos_city WHERE name LIKE '".addslashes($temp_sec[0])."'");
				$city_row=mysql_fetch_array($city_res);
				$cityid=$city_row['id'];

				$_SERVER['REQUEST_URI']="/index.php?option=com_showcitylist&view=default&cityid=$cityid&Itemid=149";
				$_REQUEST['option']="com_showcitylist";
				$_REQUEST['view']="default";
				$_REQUEST['Itemid']=149;
				$_REQUEST['cityid']=$cityid;
				mysql_free_result($city_res);
				include("index.php");
				exit;		
			
			}else{
			
				$hotel_rou_res=mysql_query("SELECT rurl,hotelid FROM jos_cos_route_hotel WHERE url LIKE '$req_url'");
				$hotel_rou_row=mysql_fetch_array($hotel_rou_res);

				$_SERVER['REQUEST_URI']=$hotel_rou_row['rurl'];
				$_REQUEST['option']="com_showhotel";
				$_REQUEST['view']="default";
				$_REQUEST['Itemid']=149;
				$_REQUEST['hotelid']=$hotel_rou_row['hotelid'];
				mysql_free_result($hotel_rou_res);
				include("index.php");
				exit;			
			
			
			}

		}


	}









if($url_count>=2){
	if($url_path_array[1]=="tour"){
		
		
		if($url_path_array[2]=="traveltochina"){
		$_SERVER['REQUEST_URI']='/index.php?option=com_clienttravel&view=clientindex&Itemid=179';

		$_REQUEST['option']="com_clienttravel";
		$_REQUEST['view']="clientindex";
		
		$_REQUEST['Itemid']=179;

		include("./index.php");
		//Header( "Location: $route_url" );
		exit;		
		
		}
	$c_query = "SELECT id,copyid FROM jos_cos_client_package WHERE url like '$req_url'";

	mysql_query("SET NAMES 'utf8'",$link);

	$c_result = mysql_query($c_query,$link) or die('Query failed: ' . mysql_error());

	if($c_row = mysql_fetch_array($c_result, MYSQL_ASSOC)){
	
		
		$_SERVER['REQUEST_URI']="/index.php?option=com_clienttravel&view=default&clienttraid={$c_row['id']}&Itemid=179";
		$_REQUEST['option']="com_clienttravel";
		$_REQUEST['view']="default";
		$_REQUEST['clienttraid']=$c_row['id'];
		if($c_row['copyid']>0){
		$_REQUEST['Itemid']=182;
		}else{
		$_REQUEST['Itemid']=179;
		}
		
		include("./index.php");	
		exit;
	}		
	mysql_free_result($c_result);

	$query = "SELECT rurl,url_cateid,packageid FROM jos_cos_route WHERE url like '$req_url'";

	mysql_query("SET NAMES 'utf8'",$link);

	$result = mysql_query($query,$link) or die('Query failed: ' . mysql_error());

	if($row = mysql_fetch_array($result, MYSQL_ASSOC)){

		$_SERVER['REQUEST_URI']=$row['rurl'];
		$_REQUEST['option']="com_showpc";
		$_REQUEST['view']="default";
		$_REQUEST['pcid']=$row['packageid'];
		if($row['url_cateid']==1){
		
			$_REQUEST['Itemid']=190;
		}elseif($row['url_cateid']==2){
		$_REQUEST['Itemid']=137;
		}
		mysql_free_result($result);
		include("./index.php");
		//Header( "Location: $route_url" );
		exit;
	}else{

		
		Header( "Location: http://www.leadtochina.com/404.php?frontpage={$_REQUEST['define_cururl']}" );
		exit;
	}
}elseif($url_path_array[1]=="about-us"){
		
		//$_SERVER['REQUEST_URI']='/index.php?option=com_content&view=article&id=18&Itemid=101';
		//$_REQUEST['option']="com_content";
		//$_REQUEST['view']="article";
		//$_REQUEST['id']=18;
		//$_REQUEST['Itemid']=101;
	include("./about/welcome.html");
		exit;
}elseif($url_path_array[1]=="contact-us"){

	include("./about/contact.html");
		exit;
}elseif($url_path_array[1]=="who-we-are"){

	include("./about/who.html");
		exit;
}elseif($url_path_array[1]=="why-choose-us"){

	include("./about/why.html");
		exit;
}elseif($url_path_array[1]=="our-unique-team"){

	include("./about/team.html");
		exit;
}elseif($url_path_array[1]=="terms-and-conditions"){

	include("./about/conditions.html");
		exit;
}elseif($url_path_array[1]=="how-to-book"){

	include("./about/how.html");
		exit;
}elseif($url_path_array[1]=="china-guide" OR $url_path_array[1]=="news"){
	

	
if($url_path_array[1]=="china-guide" AND EMPTY($url_path_array[2])==FALSE){

	if($url_path_array[2]=="nature-scenery"){
	
		$temp_catid=67;
	
	}elseif($url_path_array[2]=="historical-and-cultural-sites"){
	
		$temp_catid=133;
	
	}elseif($url_path_array[2]=="famous-attractions"){
	
		$temp_catid=134;
	
	}elseif($url_path_array[2]=="modern-&-art"){
	
		$temp_catid=135;
	
	}else{
	
$query = "SELECT id  FROM jos_categories WHERE alias like '{$url_path_array[2]}' AND section='com_scenery'";

		mysql_query("SET NAMES 'utf8'",$link);

		$result = mysql_query($query,$link) or die('Query failed: ' . mysql_error());	
		if($row = mysql_fetch_array($result, MYSQL_ASSOC)){
				$temp_catid=$row['id'];
				mysql_free_result($result);
	
		
		}	
	
	}

	if($temp_catid>0){

		$_SERVER['REQUEST_URI']="/index.php?option=com_chinaattraction&view=chinaattract&catid={$temp_catid}&Itemid=177";
		$_REQUEST['option']="com_chinaattraction";

		$_REQUEST['catid']=$temp_catid;
		$_REQUEST['Itemid']=177;

		include("index.php");
		exit;	
	
	}

}	
	
	


$culture_array=array("most-popular-festivals"=>497,"chinese-folktales"=>496,"chinese-myth-figures"=>495,"traditional-chinese-festivals"=>498,"chinese-mythology"=>494,"food-and-health"=>391,"history"=>390,"traditions"=>389,"arts"=>392,"architecture"=>393,"chinese-literature"=>394,"chinese-characters"=>461,"kaleidoscope"=>396,"myths-and-legends"=>397,"festivals-and-customs"=>398,"clothing-and-ornaments"=>399,"folk-handicraft"=>400,"folk-art"=>401,"folk-residences"=>402,"ethnic-minority"=>403,"before-zhou-dynasty"=>485,"han-dynasty-qin-dynasty"=>486,"southern-and-northern-dynasties-jin-dynasty-three-kingdoms-period"=>487,"tang-dynasty-sui-dynasty"=>488,"food-culture"=>415,"jin-dynasty-western-xia-song-dynasty-liao-dynasty-five-dynasties-and-ten-kingdoms"=>489,"eight-distinguished-regional-cuisine"=>417,"food-and-snacks-in-regions-and-provinces"=>418,"alcohol-culture"=>419,"tea-culture"=>420,"healthy-food-ideas"=>421,"calligraphy-and-painting"=>422,"sculpture-and-carving"=>423,"opera-and-theaters"=>424,"music-and-dance"=>425,"artwork"=>426,"chinese-kungfu"=>427,"games-and-spots"=>428,"science-and-invention"=>429,"yuan-dyansty"=>490,"ming-dynasty"=>491,"qing-dynasty"=>492,"modern-times"=>493,"men-of-letters"=>475,"literary-works"=>474,"literary-genres"=>473,"renowned-architectures"=>472,"traditional-architectural-element"=>471,"chinese-architecture"=>470,"chinese-dynasties"=>469,"chinese-anecdotes"=>468,"historical-events"=>467,"historical-figures"=>466,"chinese-archeology"=>464,"classic-movies-and-stars"=>465,"chinese-languages"=>463,"chinese-proverbs"=>460,"chinese-language"=>458,"chinese-writing"=>462,"traditional-clothing-and-ornaments"=>499,"clothing-of-ethnic-groups"=>500,"ancient-masterpiece"=>501,"modern-fine-work"=>502,"artists"=>503,"ancient-works"=>504,"modern-works"=>505,"artists"=>506,"traditional-operas"=>507,"operas-on-stage"=>508,"artists"=>509,"chinese-famous-watertown"=>510,"discovery"=>511,"art-in-archeology"=>512,"prehistorical-culture"=>513,"ancient-ruins"=>514,"tombs-and-mausoleums"=>515,"emperors-and-leaders"=>516,"civil-and-military-officials"=>517,"thinkers-of-hundred-schools"=>518,"elites-of-all-trades"=>519,"female-celebrities"=>520,"classic-movies"=>521,"classic-movie-stars"=>522,"traditional-music-and-dance"=>524,"traditional-musical-instruments"=>525,"porcelain"=>526,"jade"=>527,"bronze"=>528,"lacquer"=>529,"gold-and-silver-ware"=>530,"others"=>531,"varieties-of-wushu"=>532,"famous-wuxia-flims"=>533,"chinese-traditional-puzzle"=>534,"chinese-traditional-sports"=>535,"four-great-inventions"=>536,"ancient-scientific-masterpieces"=>537,"other-inventions"=>538);
					
				

	$sec_index=$url_path_array[2];
	

	if(empty($sec_index)==false){


		$third_index=$url_path_array[3];


	if(empty($third_index)==false){
		

		$query = "SELECT id,title  FROM jos_cos_chinaculture  WHERE url like '{$req_url}'";

		mysql_query("SET NAMES 'utf8'",$link);

		$result = mysql_query($query,$link) or die('Query failed: ' . mysql_error());

		
		if($row = mysql_fetch_array($result, MYSQL_ASSOC)){
				$id=$row['id'];
				$_SERVER['REQUEST_URI']="/index.php?option=com_chinaculture&view=culture&catid={$id}&Itemid=127";
				$_REQUEST['option']="com_chinaculture";
				$_REQUEST['view']="culture";
				$_REQUEST['catid']=$id;
				$_REQUEST['Itemid']=127;
				mysql_free_result($result);
				include("index.php");
				exit;		
		
		}
	}


		if(isset($culture_array[$sec_index]) AND empty($culture_array[$sec_index])==false){
				$tempid=$culture_array[$sec_index];
				$_SERVER['REQUEST_URI']="/index.php?option=com_chinaculture&catid={$tempid}&Itemid=127";
				$_REQUEST['option']="com_chinaculture";
				$_REQUEST['catid']=$tempid;
				$_REQUEST['Itemid']=127;
				//$_REQUEST['id']=627;		
				include("./index.php");
				exit;	
		
		}

	
	
	
}			
			


	
	
	
	if(EMPTY($url_path_array[2])==false){

	
		if($url_path_array[2]=="city-guide"){
			$_SERVER['REQUEST_URI']="/index.php?option=com_chinacityguide&Itemid=125";
			$_REQUEST['option']="com_chinacityguide";
			//$_REQUEST['view']="article";
			$_REQUEST['Itemid']=125;
			//$_REQUEST['Itemid']=44;		
			include("./index.php");
			exit;			
		
		}
	if($url_path_array[2]=="attractions"){
		
			$_SERVER['REQUEST_URI']="/index.php?option=com_chinaattraction&Itemid=126";
			$_REQUEST['option']="com_chinaattraction";
			//$_REQUEST['view']="article";
			$_REQUEST['Itemid']=126;
			//$_REQUEST['Itemid']=44;		
			include("./index.php");
			exit;		
	}
	
	if($url_path_array[2]=="culture"){
		
			if(empty($url_path_array[3])){
			$_SERVER['REQUEST_URI']="/index.php?option=com_chineseculture&Itemid=127";
			$_REQUEST['option']="com_chineseculture";
			//$_REQUEST['view']="article";
			$_REQUEST['Itemid']=127;
			//$_REQUEST['Itemid']=44;		
			include("./index.php");
			exit;
			}		
	}	
	if($url_path_array[2]=="travel-tools"){
		
			$_SERVER['REQUEST_URI']="/index.php?option=com_traveltool&Itemid=128";
			$_REQUEST['option']="com_traveltool";
			//$_REQUEST['view']="article";
			$_REQUEST['Itemid']=128;
			//$_REQUEST['Itemid']=44;		
			include("./index.php");
			exit;		
	}
	
	if($url_path_array[2]=="travel-tips"){
		
			$_SERVER['REQUEST_URI']="/index.php?option=com_traveltips&Itemid=129";
			$_REQUEST['option']="com_traveltips";
			//$_REQUEST['view']="article";
			$_REQUEST['Itemid']=129;
			//$_REQUEST['Itemid']=44;		
			include("./index.php");
			exit;		
	}	
	if($url_path_array[2]=="china-overview"){
		
			$_SERVER['REQUEST_URI']="/index.php?option=com_chinaover&Itemid=142";
			$_REQUEST['option']="com_chinaover";
			//$_REQUEST['view']="article";
			$_REQUEST['Itemid']=142;
			//$_REQUEST['Itemid']=44;		
			include("./index.php");
			exit;		
	}
	
	if($url_path_array[2]=="population.html"){
		
			$_SERVER['REQUEST_URI']="/index.php?option=com_content&view=article&id=624&Itemid=180";
			$_REQUEST['option']="com_content";
			$_REQUEST['view']="article";
			$_REQUEST['Itemid']=180;
			$_REQUEST['id']=624;		
			include("./index.php");
			exit;		
	}

	if($url_path_array[2]=="history.html"){
		
			$_SERVER['REQUEST_URI']="/index.php?option=com_content&view=article&id=626&Itemid=180";
			$_REQUEST['option']="com_content";
			$_REQUEST['view']="article";
			$_REQUEST['Itemid']=180;
			$_REQUEST['id']=626;		
			include("./index.php");
			exit;		
	}
	if($url_path_array[2]=="transportation.html"){
		
			$_SERVER['REQUEST_URI']="/index.php?option=com_content&view=article&id=628&Itemid=180";
			$_REQUEST['option']="com_content";
			$_REQUEST['view']="article";
			$_REQUEST['Itemid']=180;
			$_REQUEST['id']=628;		
			include("./index.php");
			exit;		
	}
	
	if($url_path_array[2]=="geography-climate.html"){
		
			$_SERVER['REQUEST_URI']="/index.php?option=com_content&view=article&id=625&Itemid=180";
			$_REQUEST['option']="com_content";
			$_REQUEST['view']="article";
			$_REQUEST['Itemid']=180;
			$_REQUEST['id']=625;		
			include("./index.php");
			exit;		
	}	

		if($url_path_array[2]=="facts"){
		
			$_SERVER['REQUEST_URI']="/index.php?option=com_content&view=article&id=291&Itemid=180";
			$_REQUEST['option']="com_content";
			$_REQUEST['view']="article";
			$_REQUEST['Itemid']=180;
			$_REQUEST['id']=291;		
			include("./index.php");
			exit;		
	}
	
	
		if($url_path_array[2]=="tourism.html"){
		
			$_SERVER['REQUEST_URI']="/index.php?option=com_content&view=article&id=6271&Itemid=180";
			$_REQUEST['option']="com_content";
			$_REQUEST['view']="article";
			$_REQUEST['Itemid']=180;
			$_REQUEST['id']=627;		
			include("./index.php");
			exit;		
	}	









	
		$alias=explode(".",$url_path_array[2]);

	if(empty($alias[0])==false){

		$query = "SELECT id,sectionid,catid  FROM jos_content WHERE alias like '{$alias[0]}'";

		mysql_query("SET NAMES 'utf8'",$link);

		$result = mysql_query($query,$link) or die('Query failed: ' . mysql_error());

		
		if($row = mysql_fetch_array($result, MYSQL_ASSOC)){
			mysql_free_result($result);
		//if($row['sectionid']==7){//things to do

			$query1 = "SELECT title   FROM jos_categories WHERE id={$row['id']}";

			mysql_query("SET NAMES 'utf8'",$link);

			$result1 = mysql_query($query1,$link) or die('Query failed: ' . mysql_error());

			$row1 = mysql_fetch_array($result1, MYSQL_ASSOC);

			$_REQUEST['option']="com_content";
			$_REQUEST['view']="article";
			$_REQUEST['id']="{$row['id']}:".$alias[0];
			$_REQUEST['catid']=$row['catid'].":{$row1['title']}";
			$_REQUEST['catid1']=$row['catid'];
			if($row['sectionid']==7){
			$_SERVER['REQUEST_URI']="/index.php?option=com_content&view=article&id={$row['id']}:".$alias[0].'&catid='.$row['catid'].":{$row1['title']}&Itemid=163";
				$_REQUEST['Itemid']=163;
			}else{
			$_SERVER['REQUEST_URI']="/index.php?option=com_content&view=article&id={$row['id']}:".$alias[0].'&catid='.$row['catid'].":{$row1['title']}&Itemid=135";
				$_REQUEST['Itemid']=135;
			}
			mysql_free_result($result1);
			include("./index.php");
			exit;


		}else{





		
		Header( "Location: http://www.leadtochina.com/404.php?frontpage={$_REQUEST['define_cururl']}" );	
		exit;
		}
		
	}
	}else{
		
			$_SERVER['REQUEST_URI']="/index.php?option=com_chinaguide&Itemid=124";
			$_REQUEST['option']="com_chinaguide";
			//$_REQUEST['view']="article";
			$_REQUEST['Itemid']=124;
			//$_REQUEST['Itemid']=44;		
			include("./index.php");
			exit;		
		
		

	
	}
}elseif($url_path_array[2]=="tours"){
		//if()


	$query = "SELECT rurl,catid  FROM jos_cos_route_city WHERE url like '$req_url'";

	mysql_query("SET NAMES 'utf8'",$link);

	$result = mysql_query($query,$link) or die('Query failed: ' . mysql_error());


	if($row = mysql_fetch_array($result, MYSQL_ASSOC)){

		$_SERVER['REQUEST_URI']=$row['rurl'];
		$_REQUEST['option']="com_pgcategory";
		$_REQUEST['view']="default";
		$_REQUEST['catid']=$row['catid'];
		$_REQUEST['Itemid']=166;
		mysql_free_result($result);
		include("./index.php");
		//Header( "Location: $route_url" );
		exit;


	}
}
}else{


		
		Header( "Location: http://www.leadtochina.com/404.php?frontpage={$_REQUEST['define_cururl']}" );
	}
?>