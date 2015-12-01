<?php
require_once('config.php');

$pid = $_GET['pid'];//省份ID

$cid = $_GET['cid'];//城市ID


$city_res = mysql_query( "SELECT id ,name FROM jos_cos_city WHERE provinceid=$pid" );

$city_str = "<select name='cityid' id='cityid' onchange=\"SetDis(this.options[this.selectedIndex].value) \"><option value=0>请选择城市</option>";
$city_sle ="";
while ($city_row=mysql_fetch_assoc($city_res) ){

	if( empty($cid)==false ){
		
		if($city_row['id']==$cid){
		
			$city_sle ="selected='selected'";
		}else{
			$city_sle ="";
		}
	}

	$city_str.="<option value={$city_row['id']} $city_sle>{$city_row['name']}</option>";
}
$city_str.="</select>";
echo $city_str;
exit;
?>