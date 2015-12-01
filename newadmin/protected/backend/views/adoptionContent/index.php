<?php
/* @var $this AdoptionContentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'AdoptionContents',
);

$this->menu=array(
	array('label'=>'新建AdoptionContent', 'url'=>array('create')),
	array('label'=>'管理AdoptionContent', 'url'=>array('admin')),
);
?>

<h1>AdoptionContents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
