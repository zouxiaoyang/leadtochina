<?php
/* @var $this IndexRecommendCityController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Index Recommend Cities',
);

$this->menu=array(
	array('label'=>'新建IndexRecommendCity', 'url'=>array('create')),
	array('label'=>'管理IndexRecommendCity', 'url'=>array('admin')),
);
?>

<h1>Index Recommend Cities</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
