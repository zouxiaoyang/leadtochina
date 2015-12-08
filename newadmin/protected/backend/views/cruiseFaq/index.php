<?php
/* @var $this CruiseFaqController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cruise Faqs',
);

$this->menu=array(
	array('label'=>'新建CruiseFaq', 'url'=>array('create')),
	array('label'=>'管理CruiseFaq', 'url'=>array('admin')),
);
?>

<h1>Cruise Faqs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
