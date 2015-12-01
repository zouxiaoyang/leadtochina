<?php
/* @var $this CityGuideIndexInfoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'City Guide Index Infos',
);

$this->menu=array(
	array('label'=>'新建CityGuideIndexInfo', 'url'=>array('create')),
	array('label'=>'管理CityGuideIndexInfo', 'url'=>array('admin')),
);
?>

<h1>City Guide Index Infos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
