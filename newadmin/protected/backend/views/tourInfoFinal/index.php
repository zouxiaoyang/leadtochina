<?php
/* @var $this TourInfoFinalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tour Info Finals',
);

$this->menu=array(
	array('label'=>'新建TourInfoFinal', 'url'=>array('create')),
	array('label'=>'管理TourInfoFinal', 'url'=>array('admin')),
);
?>

<h1>Tour Info Finals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
