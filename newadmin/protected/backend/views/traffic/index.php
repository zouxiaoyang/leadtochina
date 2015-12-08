<?php
/* @var $this TrafficController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Traffics',
);

$this->menu=array(
	array('label'=>'新建Traffic', 'url'=>array('create')),
	array('label'=>'管理Traffic', 'url'=>array('admin')),
);
?>

<h1>Traffics</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
