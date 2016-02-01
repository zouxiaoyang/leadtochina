<?php 
class Seo{

	public static function _seo($t,$title,$keywords,$description){ // $t==>$this;
		$t->setPageTitle($title);
		Yii::app()->clientScript->registerMetaTag('keywords',$keywords);
		Yii::app()->clientScript->registerMetaTag('description', $description);
	}
}