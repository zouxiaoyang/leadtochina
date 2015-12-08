<?php
/* @var $this CityQuestionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'City Questions',
);

$this->menu=array(
	array('label'=>'新建CityQuestion', 'url'=>array('create')),
	array('label'=>'管理CityQuestion', 'url'=>array('admin')),
);
?>

<h1>City Questions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
