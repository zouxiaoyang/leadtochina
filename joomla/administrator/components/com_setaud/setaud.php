<?php
defined('_JEXEC') or die('Restricted access');

$db = & JFactory::getDBO();

$pid = JRequest::getCmd('id');//省份ID
$tj = JRequest::getCmd('tj');//省份ID



$db->setQuery( "SELECT auditing FROM jos_cos_question   WHERE id=$pid" );

$hot_res = $db->query();
$hot_row=mysql_fetch_assoc($hot_res);

if($hot_row['auditing']==1){

	if($tj=="yes"){
		echo "不能操作！";
	}elseif($tj=="no"){
		$db->setQuery( "UPDATE  jos_cos_question SET auditing=0 WHERE id=$pid" );
		$db->query();
		echo "操作成功！";
	}

}elseif($hot_row['auditing']==0){

	if($tj=="yes"){
		
		$db->setQuery( "UPDATE  jos_cos_question SET auditing=1 WHERE id=$pid" );
		$db->query();
		echo "审核成功！";
	}elseif($tj=="no"){
		echo "不能重复操作！";
	}

}
exit;
?>