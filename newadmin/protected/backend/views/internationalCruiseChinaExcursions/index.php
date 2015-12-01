<?php
/* @var $this InternationalCruiseChinaExcursionsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'International Cruise China Excursions',
);

$this->menu=array(
	array('label'=>'新建InternationalCruiseChinaExcursions', 'url'=>array('create')),
	array('label'=>'管理InternationalCruiseChinaExcursions', 'url'=>array('admin')),
);
?>

<h1>International Cruise China Excursions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
