<?php
/* @var $this EnglishController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Englishes',
);

$this->menu=array(
	array('label'=>'新建English', 'url'=>array('create')),
	array('label'=>'管理English', 'url'=>array('admin')),
);
?>

<h1>Englishes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
