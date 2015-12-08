<?php 
$array1=array('one'=>'test one','two'=>'test two','three'=>'test three');
var_dump($array1);
$array_new=array_merge($array1,array('three'=>'test other three'));
var_dump($array_new);
$array_new=array_merge(array('two'=>'test other two222'),$array_new);
var_dump($array_new);
?>