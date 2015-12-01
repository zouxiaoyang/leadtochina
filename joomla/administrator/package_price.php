<?php
include("../configuration.php");


$route_config=new JConfig();

$req_url=$_SERVER['REQUEST_URI'];

$route_localhost=$route_config->host;
$route_user=$route_config->user;
$route_pw=$route_config->password;

$link = mysql_connect($route_localhost,$route_user, $route_pw) or die('Could not connect: ' . mysql_error());

mysql_select_db('joomla') or die('Could not select database');


//$query = "SELECT a.id ,a.packageid,a.six_nice FROM jos_cos_tours_price AS a WHERE six_nice=(SELECT min(six_nice) FROM jos_cos_tours_price WHERE a.id=id GROUP BY packageid )";



$query1="SELECT id FROM jos_cos_tours_package  WHERE price=0 OR price IS NULL";

$res1=mysql_query($query1,$link);

while($row1=mysql_fetch_array($res1,MYSQL_ASSOC)){

	$res=mysql_query("SELECT min(six_nice) AS six_nice FROM jos_cos_tours_price WHERE packageid={$row1['id']}",$link);
	//echo $row1['id'];
	//echo "<br />";
	//echo $row1['six_nice'];


	if($row=@mysql_fetch_array($res,MYSQL_ASSOC)){
		$parseINT=intval($row['six_nice']);
		if($parseINT>0){

		mysql_query("UPDATE jos_cos_tours_package SET price={$row['six_nice']} WHERE id={$row1['id']}");
		
		}
		
	
	}
	$res2=mysql_query("SELECT min(double_occ) AS double_occ FROM jos_cos_tours_price1 WHERE packageid={$row1['id']}",$link);
	if($row2=@mysql_fetch_array($res2,MYSQL_ASSOC)){
		//echo "test <br />";

		$parseINT=intval($row2['double_occ']);
		if($parseINT>0){
		mysql_query("UPDATE jos_cos_tours_package SET price={$row2['double_occ']} WHERE id={$row1['id']}");
		}
	
	}
}


echo "更新成功！";
exit;




?>