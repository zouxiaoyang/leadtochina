<?php

require_once('config.php');

$pid = $_GET['pcaid'];//二级主题ID


$route_res = mysql_query( "SELECT routes FROM jos_categories  WHERE id=$pid" );


$route_str = "";

$route_row=mysql_fetch_assoc($route_res);
if(empty($route_row['routes'])==false){
	
	$route_str=$route_row['routes'];
	
}
echo $route_str;
exit;
?>