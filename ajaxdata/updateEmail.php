<?php 
	$conn  = mysql_connect('localhost','root','root');
	mysql_select_db('joomla');

$email = addslashes(trim($_GET['new_email']));
$orderno = addslashes(trim($_GET['order_id']));

if(!empty($email) && !empty($orderno)){

$sql ="update jos_total_order set email='{$email}' where orderNO='{$orderno}'";
$status = mysql_query($sql);

// var_dump($status);exit;

echo mysql_affected_rows()?1:0;
}else{
	echo 'OrderNo or Email error!';
}