<?php

require_once('config.php');


$cid =(int)trim($_GET['cid']);//一级主题ID

$childid = (int)trim($_GET['childid']);//二级主题ID


$query = mysql_query( "SELECT id ,title FROM jos_categories  WHERE parent_id=$cid" );


$first_str = "<select name='childid' id='childid' onchange='GetRoutes(this.options[this.selectedIndex].value);'><option value=0>请选择二级主题</option>";
$cate_str="";
$city_sle ="";
while ($cate_row=mysql_fetch_assoc($query) ){

	if( empty($childid)==false ){
		
		if($cate_row['id']==$childid){
		
			$city_sle ="selected='selected'";
		}else{
			$city_sle ="";
		}
	}

	$cate_str.="<option value={$cate_row['id']} $city_sle>{$cate_row['title']}</option>";
}
if($cate_str==""){
	echo "";
	exit;
}else{

$cate_str=$first_str.$cate_str."</select>";

}
// mysql_free_result($cate_res);
echo $cate_str;
exit;
?>