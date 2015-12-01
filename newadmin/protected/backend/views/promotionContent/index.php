<?php
/* @var $this PromotionContentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Promotion Contents',
);

$this->menu=array(
	array('label'=>'新建PromotionContent', 'url'=>array('create')),
	array('label'=>'管理PromotionContent', 'url'=>array('admin')),
);
?>

<h1>Promotion Contents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
