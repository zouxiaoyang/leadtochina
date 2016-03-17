<?php
defined('_JEXEC') or die('Restricted access');

$db = & JFactory::getDBO();

$pid = JRequest::getCmd('id');//省份ID
$from = JRequest::getCmd('from');//省份ID

if(empty($from)){
	$db->setQuery( "SELECT id FROM jos_cos_uploadpic  WHERE id=$pid" );

	$hot_res = $db->query();
	if($hot_row=mysql_fetch_assoc($hot_res)){
	$db->setQuery( "DELETE FROM jos_cos_uploadpic WHERE id=$pid" );
		$db->query();

	}
	echo "删除成功！";
	exit;
}elseif($from=="hotel"){

	$db->setQuery( "SELECT id FROM jos_cos_hotelpic  WHERE id=$pid" );

	$hot_res = $db->query();
	if($hot_row=mysql_fetch_assoc($hot_res)){
	$db->setQuery( "DELETE FROM jos_cos_hotelpic WHERE id=$pid" );
		$db->query();

	}
	echo "删除成功！";
	exit;
}elseif($from=="scenery"){

	$db->setQuery( "SELECT id FROM jos_cos_scenerypic   WHERE id=$pid" );

	$sce_res = $db->query();
	if($sce_row=mysql_fetch_assoc($sce_res)){
	$db->setQuery( "DELETE FROM jos_cos_scenerypic  WHERE id=$pid" );
		$db->query();

	}
	echo "删除成功！";
	exit;
}elseif($from=="cruise"){

	$db->setQuery( "SELECT id FROM jos_cos_cruisepic   WHERE id=$pid" );

	$sce_res = $db->query();
	if($sce_row=mysql_fetch_assoc($sce_res)){
	$db->setQuery( "DELETE FROM jos_cos_cruisepic  WHERE id=$pid" );
		$db->query();

	}
	echo "删除成功！";
	exit;
}elseif($from=="clientpic"){

	$db->setQuery( "SELECT id FROM jos_cos_clientpic   WHERE id=$pid" );

	$sce_res = $db->query();
	if($sce_row=mysql_fetch_assoc($sce_res)){
	$db->setQuery( "DELETE FROM jos_cos_clientpic  WHERE id=$pid" );
		$db->query();

	}
	echo "删除成功！";
	exit;
}


elseif($from=="chinaculture"){

	$db->setQuery( "SELECT id FROM jos_cos_chinaculpic   WHERE id=$pid" );

	$sce_res = $db->query();
	if($sce_row=mysql_fetch_assoc($sce_res)){
	$db->setQuery( "DELETE FROM jos_cos_chinaculpic  WHERE id=$pid" );
		$db->query();

	}
	echo "删除成功！";
	exit;
}elseif($from=="content"){

	$db->setQuery( "SELECT id FROM jos_cos_contentpic   WHERE id=$pid" );

	$sce_res = $db->query();
	if($sce_row=mysql_fetch_assoc($sce_res)){
	$db->setQuery( "DELETE FROM jos_cos_contentpic  WHERE id=$pid" );
		$db->query();

	}
	echo "删除成功！";
	exit;
}elseif($from=="city"){

	$db->setQuery( "SELECT id FROM jos_cos_citymap   WHERE id=$pid" );

	$sce_res = $db->query();
	if($sce_row=mysql_fetch_assoc($sce_res)){
	$db->setQuery( "DELETE FROM jos_cos_citymap  WHERE id=$pid" );
		$db->query();

	}
	echo "删除成功！";
	exit;
}elseif($from=="province"){

	$db->setQuery( "SELECT id FROM jos_cos_provincemap   WHERE id=$pid" );

	$sce_res = $db->query();
	if($sce_row=mysql_fetch_assoc($sce_res)){
	$db->setQuery( "DELETE FROM jos_cos_provincemap  WHERE id=$pid" );
		$db->query();

	}
	echo "删除成功！";
	exit;
}
?>