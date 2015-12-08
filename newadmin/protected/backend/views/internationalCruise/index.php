<?php
/* @var $this InternationalCruiseController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'International Cruises',
);

$this->menu=array(
	array('label'=>'新建InternationalCruise', 'url'=>array('create')),
	array('label'=>'管理InternationalCruise', 'url'=>array('admin')),
);
?>

<h1>International Cruises</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
